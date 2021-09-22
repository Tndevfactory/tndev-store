
<div class="mt-1 me-2">
    <a  href="{{route('cart-show')}}"  class="text-decoration-none 
    cart position-relative p-0"
      style="color:#0C537A">

        <span class="text-white text-center ff-oswald position-absolute" 
                style=" height:1.8rem; width:1.8rem; border-radius: 50% ; font-size: .9rem ;
                 background-color: red;top:-30px;right:-6px"
                >
                {{Cart::count() != '0' ? Cart::count(): '9'  }}
        </span>

        <i class="fas fa-shopping-cart" style="font-size: 2rem"></i>
    </a>
</div>
