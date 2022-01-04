<div class="border-end border-warning h-100">
    <div class="text-center">
        <img src="{{asset('images/hassan.jpg')}}" alt="" class="img-fluid rounded-circle mt-5">
        <h3 class="text-white mt-3 name">Hassan khan</h3>
    </div>
    <nav class="nav flex-coloum text-center mt-4">
        <ul>
            <li> <a href="{{route('home')}}" class="nav-link {{Request::routeIs('home') ? 'active' : ''}}">Home</a></li>
            <li> <a href="{{route('service')}}" class="nav-link {{Request::routeIs('service') ? 'active' : ''}}">Services</a></li>
            <li> <a href="{{route('skill')}}" class="nav-link {{Request::routeIs('skill') ? 'active' : ''}}">Skill</a></li>
            <li> <a href="{{route('contact')}}" class="nav-link {{Request::routeIs('contact') ? 'active' : ''}}">Contact</a></li>
        </ul>




    </nav>

</div>