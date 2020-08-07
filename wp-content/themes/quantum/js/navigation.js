/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const menu = $('.mobile-menu')
	const header = document.getElementsByClassName('header-nav-btn')[0]
	const page = $('.site')
	console.log(header)
	const slider = $('.slider')
	const menuBtn = $('.header-nav-btn')
	const menuBtnTopRow = $('.header-nav-btn__1')
	const menuBtnCenterRow = $('.header-nav-btn__2')
	const menuBtnButtonRow = $('.header-nav-btn__3')

	header.addEventListener('click', (e)=>{

		page.toggleClass('scroll-body')
		if (menuBtnCenterRow.hasClass('hidden') | menuBtnCenterRow.hasClass('visible'))
		{
			menuBtnCenterRow.toggleClass('visible')
			menu.toggleClass('hidden-SLIDE')
		}
		menu.toggleClass('visible-SLIDE')
		menuBtn.toggleClass('header-nav-btn-close')
		menuBtnTopRow.toggleClass('header-nav-btn__1-close')
		menuBtnButtonRow.toggleClass('header-nav-btn__3-close')
		menuBtnCenterRow.toggleClass('hidden')
	});
}() );
