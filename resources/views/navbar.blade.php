<nav id="navbar" class="navbar navbar-expand-lg navbar-dark py-3" style=" z-index:1">
    <div class="container">
        <!-- Navbar brand -->
        <a href="{{route('index')}}" class="d-flex align-items-center" to="/">
            <img src="https://fra.mofaga.gov.np/static/media/logo.940ff832.svg" height="50px" />
            <div class="ml-3 navbar-brand text-main">
                <div class="h3 font-weight-bold">सुदूरपश्चिम प्रदेश</div>
                <div class="h4 font-weight-bold">परियोजना व्यवस्थापन सूचना प्रणाली</div>
            </div>
        </a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pr-1">
                    <a href="{{route('index')}}" class="nav-link h4" to="/">गृह पृष्ठ</a>
                </li>

                <img class="image" src="/assets/img/nepalflag.gif" alt="flag" height="60px">
            </ul>
            <!-- Links -->
        </div>
        <!-- Collapsible content -->
    </div>
</nav>
<style>
        @media screen and (max-width: 700px) {
            img{
                max-width: 50%;
                height: 20px;
            }
        }
</style>
