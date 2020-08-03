<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('landing/landscape-official-logo-1.png')}}" width="300" height="70" class="d-inline-block align-top" alt="">
        SMS v5.0
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse pl-5 ml-5" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ml-5 pl-5">
            <li class="nav-item active pl-5 ml-5">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('pricing')}}">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('knowledge_base')}}">Knowledge Base</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('faqs')}}">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About</a>
            </li>
        </ul>
        <div class="my-2 my-lg-0">
            <a class="btn btn-outline-secondary my-2 my-sm-0" href="{{url('/')}}">Login</a>
        </div>
    </div>
</nav>
