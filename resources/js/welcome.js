// import axios from "axios";
// import Cookies from 'js-cookie'
// import anime from "animejs/lib/anime.es.js";

//  export function toastRun ()
//     {

//         let toastAnime = document.querySelector( ".toast_anime" );
//         if ( toastAnime !== null )
//         {
//             anime( {
//                 targets: toastAnime,
//                 opacity:[ 0.5,'1', '1','1' ,'1','0.5','0' ],
//                 duration:1100,
//                 easing: 'easeInOutSine',
//             } ) ;
//         }
//    }

//    function cloneCreate ( e )
//         {
//             let imgElem = e.target.parentElement.parentElement.parentElement.children[0].children[0]
//             if ( imgElem !== undefined )
//             {
//                 let imgClone = imgElem.cloneNode( true )
//                 imgElem.parentElement.appendChild( imgClone )

//                 imgClone.classList.remove( 'bg-danger' )
//                 imgClone.style.backgroundColor = 'lightgray'
//                 imgClone.style.position = 'absolute'
//                 imgClone.style.zIndex = '55'

//                 return imgClone;
//                 }
//         }

// export function cloneAnime ()
// {

//      let acheterBtns = document.querySelectorAll( ".acheterBtn" );
//     let toastAnime = document.querySelector( ".toast_anime" );
//     let cartCount = document.querySelector( ".cart_count" );

//     function triggerCloneAnime ( e )
//     {

//         e.preventDefault();

//         console.log( e.target.dataset.product );
//         let product = e.target.dataset.product;
//         // axios start

//            axios.get( `/acheter/${product}`)
//                .then( data =>
//                {
//                    console.log( data.data );
//                    if(data.data >0) cartCount.textContent=data.data

//                     toastRun()
//                   // location.reload();
//                } )
//             .catch( error => console.log( error ) );

//         // axios end

//         let elem = cloneCreate( e )

//         if ( elem !== undefined )

//         {

//             let elemLeft = elem.getBoundingClientRect().left
//             toastAnime.classList.remove( "d-none" )

//                 anime( {
//                  targets: elem,
//                  opacity: [  '0.9', '0.8', '0.7','0.6', '0.4', '0.2' , '0.1','0.0'],
//                  scale: [  '1.1', '0.9','0.8','0.8','0.8','0.8','0.8' ],
//                  translateX: [0, window.innerWidth - elemLeft],
//                  translateY:[0,  -900],
//                  duration:700,
//                  easing: 'easeInOutSine',
//                     complete: function ( anim )
//                     {
//                         elem.remove();

//                     },
//             } ) ;
//         }
//         }

//         if ( acheterBtns !== null )
//         {

//         acheterBtns.forEach(elem => elem.addEventListener("click", (e) => {triggerCloneAnime(e)}))

//         }

// }
