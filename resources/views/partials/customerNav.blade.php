<div class="header navbar-fixed-top ">
    <div class="grid">

        <div class="header-with-search">
            <div class="header__logo">
                <a href="{{route('customer.customerView')}}" class="">
                    <svg viewBox="0 0 192 65" class="header__logo-img">
                        <g fill-rule="evenodd">
                            <path>
                                <a href="">
                                    <img src="./image/Zoo-Logo.png" alt="" class="img_zoo-logo">
                                </a>

                            </path>
                        </g>
                    </svg>
                </a>

            </div>
            <div class="header__search">
                <div class="header__search-input-wrap">
                    <input type="text" class="header__search-input" placeholder="Search...">

                    <div class="header__search-history">
                        <h3 class="header__search-history-heading">Search History</h3>
                        {{--                        <ul class="header__search-history-list">--}}
                        {{--                            <li class="header__search-history-item">--}}
                        {{--                                <a href="">something</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="header__search-history-item">--}}
                        {{--                                <a href="">something</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="header__search-history-item">--}}
                        {{--                                <a href="">something</a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div>
                <div class="header__search-select">
                    <span class="header__search-select-label">In Zoo</span>
                    <i class="header__search-select-icon fas fa-sort-down"></i>
                    {{--                    <ul class="header__search-option">--}}
                    {{--                        <li class="header__search-option-item header__search-option-item--active">--}}
                    {{--                            <span>In Zoo</span>--}}

                    {{--                        </li>--}}
                    {{--                        <li class="header__search-option-item ">--}}
                    {{--                            <span>Out Zoo</span>--}}

                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                </div>
                <button class="header__search-btn">
                    <i class="header__search-btn-icon fas fa-search"></i>
                </button>
            </div>
            <div class="header__navbar-item header__navbar-item--strong"><a href="{{route('customer.customerSignUp')}}" class="btn btn-info">Sign up now!</a></div>
            <div class="header__navbar-item header__navbar-item--strong"><a href="{{route('customer.index')}}" class="btn btn-info">Login now!</a></div>
        </div>


    </div>


</div>
