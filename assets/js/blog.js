//import InfiniteScroll from 'infinite-scroll';
import Masonry from 'masonry-layout';
import imagesLoaded from 'imagesloaded';
(function( $ ) {
	'use strict';

	$(function() {

		let cacheBuster;
		const $dots = $('.brister-blog-stage');
		let blogCat = '';
		let searchValue = '';

		// Update cacheBuster value when the content changes.
		function updateCacheBuster() {
			cacheBuster = Date.now();
		}

		function bristerBlogLoadAllPosts(page, blogCat = '', searchValue = '') {
			// Append cacheBuster to the AJAX URL
			const ajaxUrl = ajax_object.ajaxurl + '?cache=' + cacheBuster;

			$dots.fadeIn(400);
		
			let postData = {
				page: page,
				search: searchValue,
				blog_cat: blogCat,
			};
		
			let hiddenFormInput = $('form.brister-blog-list input.brister-blog-hidden-form');
			hiddenFormInput.val(JSON.stringify(postData));
		
			let data = {
				action: 'brister_blog_load_posts',
				data: JSON.parse(hiddenFormInput.val()),
				nonce: ajax_object.nonce
			};
		
			$.post(ajaxUrl, data)
				.done(response => {
					// Check if response contains an article element
					if ($(response).find('article').length === 0) {
						// Handle the case where there are no articles in the response
            $('.brister-blog-container').html(response.msg);
            $('.brister-blog-pagination-nav').html(response.pagination);
					} else {
            $('.brister-blog-container').html(response.msg);
            $('.brister-blog-pagination-nav').html(response.pagination);
						let elem = document.querySelector('.brister-blog-content');
						let msnry = new Masonry(elem, {
							// options
							itemSelector: '.card-blog',
							columnWidth: '.card-blog',
							//percentPosition: true,
						});

						imagesLoaded(elem).on('progress', () => {
							msnry.layout();
						});
						
					}
				})
				.fail((xhr, status, error) => {
					console.log('AJAX error:', status, error);
				})
				.always(() => {
					$dots.fadeOut(400);
				});
		}
		
		// Check if our hidden form input is not empty, meaning it's not the first time viewing the page.
		function initBlogList() {
			updateCacheBuster();
			let hiddenFormInput = $('form.brister-blog-list input.brister-blog-hidden-form');
			if (hiddenFormInput.val()) {
				// Submit hidden form input value to load previous page number
				const data = JSON.parse(hiddenFormInput.val());
				bristerBlogLoadAllPosts(data.page, data.blog_cat, data.search);
			} else {
				// Load first page
				bristerBlogLoadAllPosts(1);
			}
		}
		
		initBlogList();

		// Button functions
		$('body').on('click', '.brister-blog-filters-buttons', function(e) {
			e.preventDefault();

			const category = $(this).data('category');
			$('.brister-blog-filters-buttons').removeClass('active');
			$(this).addClass('active');

			blogCat = category;
			bristerBlogLoadAllPosts(1, blogCat, searchValue);
		});
		
		// Define debounce function
		function debounce(func, wait) {
			let timeout;
			return function(...args) {
				clearTimeout(timeout);
				timeout = setTimeout(() => func.apply(this, args), wait);
			};
		}

		// Search input with debounce
		const debouncedSearch = debounce((e) => {
			searchValue = $(e.target).val();
			bristerBlogLoadAllPosts(1, blogCat, searchValue);
		}, 500);

		$('body').on('input', '.brister-blog-filters-search', debouncedSearch);
		
		// Pagination Clicks
		$('body').on('click', '.brister-blog-container .brister-blog-pagination li.active', function() {
			let page = $(this).attr('p');
			bristerBlogLoadAllPosts(page, blogCat, searchValue);
			// Scroll to top of page
			//$('html, body').animate({ scrollTop: 200 }, 'slow')
		});

	});
})( jQuery );
