'use strict';


document.getElementById('cont-shopping').addEventListener("click", function () {

var path = "{{ url('/clothing') }}";
window.location.href = path;

});

const order = document.querySelector('.order');
const confirmOrder = document.querySelector('.order-form');
const overlay = document.querySelector('.overlay');

order.addEventListener('click',function(){
    confirmOrder.classList.remove('hidden');
    overlay.classList.remove( 'hidden' );
});

overlay.addEventListener('click',function(){
    confirmOrder.classList.add('hidden');
    overlay.classList.add('hidden');
});
