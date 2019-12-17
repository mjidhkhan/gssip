<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src={{ asset("./images/bm_avt.jpg")}} class="brand-image img-circle elevation-0" alt="User Image"  style="opacity: 1">
            </div>
            <div class="info">
                <span class="d-block" href="#">{{ Auth::user()->name }}</span>  <a class="d-block" href="javascript:{}" onclick="document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</aside>
