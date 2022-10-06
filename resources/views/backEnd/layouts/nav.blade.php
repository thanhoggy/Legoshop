<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Tổng quan</a>
    <ul>
        <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Tổng quan</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Danh mục sản phẩm</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Thêm danh mục</a></li>
                <li><a href="{{route('category.index')}}">Danh sách danh mục SP</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Sản phẩm</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Thêm sản phẩm</a></li>
                <li><a href="{{route('product.index')}}">Danh sách sản phẩm</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Mã giảm giá</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Thêm mã giảm giá</a></li>
                <li><a href="{{route('coupon.index')}}">Danh sách mã giảm giá</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->