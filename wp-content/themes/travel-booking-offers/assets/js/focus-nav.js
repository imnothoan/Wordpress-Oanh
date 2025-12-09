( function( window, document ) {
  function travel_booking_offers_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const travel_booking_offers_nav = document.querySelector( '.sidenav' );
      if ( ! travel_booking_offers_nav || ! travel_booking_offers_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...travel_booking_offers_nav.querySelectorAll( 'input, a, button' )],
        travel_booking_offers_lastEl = elements[ elements.length - 1 ],
        travel_booking_offers_firstEl = elements[0],
        travel_booking_offers_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && travel_booking_offers_lastEl === travel_booking_offers_activeEl ) {
        e.preventDefault();
        travel_booking_offers_firstEl.focus();
      }
      if ( shiftKey && tabKey && travel_booking_offers_firstEl === travel_booking_offers_activeEl ) {
        e.preventDefault();
        travel_booking_offers_lastEl.focus();
      }
    } );
  }
  travel_booking_offers_keepFocusInMenu();
} )( window, document );