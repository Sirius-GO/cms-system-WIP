<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Posts Admin</span>
</a>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Blog Posts:</h6>
    <a class="collapse-item" href="{{route('post.create')}}">Create Post</a>
    <a class="collapse-item" href="{{route('admin.posts.index')}}">View All Posts</a>
    </div>
</div>
</li>