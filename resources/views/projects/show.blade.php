@extends('layouts.app')

@section('content')
    <section class="show show__content">
        <div class="row" id="image-data">
            <div class="col-lg-8">
                <div id="downloadModal" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">{{__('projects.thnksfordownload')}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <label for="attribution">{{__('projects.attribution')}}:</label><input name="attribution" id="attribution"
                                                                                    class="form-control"
                                                                                    value="{{__('projects.attributionlink', ['name' => $project->user->name, 'license' => $project->images->first()['license'], 'link' => Request::url()])}}"/>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="show__img">
                    <img id="image-{{$project->id}}" src="<?= asset($project->images->first()['file']) ?>" class="img-fluid" alt="Responsive image">
                </figure>
                <div class="show__panel">
                    <ul class="row show__panel__buttons">
                        <li class="show__panel__item col-lg-2">
                            @if(Auth::check() && !Auth::user()->likes->where('project_id', $project->id)->isEmpty())
                                <a href="#" class="tiny__button like filled">
                            @else
                                <a href="#" class="tiny__button like">
                            @endif
                                <span>Like</span>
                                <?php include("img/SVG/like.php") ?>
                                <form action="/projects/like/{{$project->id}}" style="display: none;" method="POST">
                                    @csrf
                                    @method('POST')
                                </form>
                            </a>
                        </li>
                        <li class="show__panel__item col-lg-2">
                            @if(Auth::check() && $galleried)
                                <a href="/galleries/select/{{$project->id}}" class="tiny__button bookmark filled">
                            @else
                                <a href="/galleries/select/{{$project->id}}" class="tiny__button bookmark">
                            @endif
                                <span>Bookmark</span>
                                <?php include("img/SVG/bookmark.php") ?>
                            </a>
                        </li>
                        <li class="show__panel__item col-lg-2">
                            @if(Auth::check() && Auth::user()->hasAnyRole('admin'))
                                ({{$project->images->first()['downloads']}})
                            @endif
                            <a href="/images/{{$project->images->first()['id']}}/download" id="download"
                               class="tiny__button download">
                                <span>Download</span>
                                <?php include("img/SVG/download.php") ?>
                            </a>
                        </li>
                        <li class="show__panel__item col-lg-4 text-right">
                            Rights: <span>{{$project->images->first()['license']}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <h1 class="show__title u-title type-2">
                    {{$project->title}}
                    @if($project->year) ({{$project->year}}) @endif

                </h1>
                <span class="u-title type-4 u-uppercase bold u-title__category">{{$project->location}}</span>
                <div class="show__section show__desc">
                    <h1 class="show__subtitle u-title type-4">
                        {{__('projects.description')}}
                    </h1>
                    <p>
                        {{$project->description}}
                    </p>
                </div>
                <div class="show__section show__creators">
                    <ul>
                        <li>
                            <h1 class="show__subtitle u-title type-4">{{__('projects.creator')}}</h1>
                            <div class="show__creators__profile">
                                <img src="" alt="">
                                <span>{{$project->creator}}</span>
                            </div>
                        </li>
                        <li>
                            <h1 class="show__subtitle u-title type-4">{{__('projects.photographer')}}</h1>
                            <div class="show__creators__profile">
                                <img src="" alt="">
                                <span>{{$project->images->first()['credit']}}</span>
                            </div>
                        </li>

                <li class="show__section show__keywords">
                    <h1 class="show__subtitle u-title type-4">{{__('projects.keywords')}}</h1>
                    <ul>
                        @foreach($project->tags as $tag)
                            <li class="show__keywords__item u-uppercase">
                                #{{$tag->name}}
                            </li>
                        @endforeach
                    </ul>
                </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{--<script src="/js/interact-button.js"></script>--}}
    <script>
        document.addEventListener('DOMContentLoaded', init, false);

        function init() {
            $("#image-data").on("contextmenu", "img", function (ev) {
                return false;
            });

            $("#download").on('click', function (ev) {
                $('#downloadModal').modal('show');
            });
        }
    </script>
@endsection
