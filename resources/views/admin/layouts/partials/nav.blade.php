      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegacion</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
        <li class="treeview {{ request()->is('admin/categories*') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-bars"></i> <span>Categorias</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('admin/categories') ? 'active' : '' }}"><a href="{{route('admin.categories')}}"><i class="fa fa-eye"></i>Ver todas las categorias</a></li>
            <li class="{{ request()->is('admin/categories/create') ? 'active' : '' }}"><a href="{{route('admin.categories.create')}}"><i class="fa fa-pencil"></i>Crear una categoria</a></li>
          </ul>
        </li>
        <li class="treeview {{ request()->is('admin/blogs*') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-bars"></i> <span>Blogs</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ request()->is('admin/blogs') ? 'active' : '' }}"><a href="{{route('admin.blogs')}}"><i class="fa fa-eye"></i>Ver todos los blogs</a></li>
            <li class="{{ request()->is('admin/blogs/create') ? 'active' : '' }}"><a href="{{route('admin.blogs.create')}}"><i class="fa fa-pencil"></i>Crear un blog</a></li>
          </ul>
        </li>
        <li class="{{ request()->is('admin/contact') ? 'active' : '' }}"><a href="{{route('admin.contact')}}"><i class="fa fa-eye"></i>Ver mensajes de contacto</a></li>
      </ul>