@extends('layouts.main')
@section('content')
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-xl-8 py-5 px-md-5">
	    				<div class="row pt-md-4">
                            @foreach($posts as $post)
			    			<div class="col-md-12">
									<div class="blog-entry ftco-animate d-md-flex">
										<a href="{{route('showDetail',$post->slug)}}" class="img img-2" style="background-image: url({{$post->thumbnail}});"></a>
										<div class="text text-2 pl-md-4">
				              <h3 class="mb-2"><a href="{{route('showDetail',$post->slug)}}">{{$post->title}}</a></h3>
				              <div class="meta-wrap">
												<p class="meta">
				              		<span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
														@forelse($post->categories as $category)
				              		<span><a href="{{ route('category',$category->slug) }}"><i class="icon-folder-o mr-2"></i>{{$category->name}}</a></span>
													@empty
														<span><a href="{{route('home')}}"><i class="icon-folder-o mr-2"></i>Chưa phân loại</a></span>
													@endforelse
				              		<span><i class="icon-comment2 mr-2"></i>5 Comment</span>
				              	</p>
			              	</div>
				              <p class="mb-4">{{$post->description}}</p>
				              <p><a href="{{route('showDetail',$post->slug)}}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
				            </div>
									</div>
								</div>
                            @endforeach

			    		</div><!-- END-->
			    		<div class="row">
			          <div class="col">

			              {{$posts->links()}}

			          </div>
			        </div>
			    	</div>
	    		
	@endsection
