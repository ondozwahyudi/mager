@extends('layouts.layouts')
@section('content')

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">
            <a href="{{route('home.show', $kelas)}}" class="btn btn-primary btn-light"> Back</a>
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
        </div>

        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                <div class="dropdown dropdown-inline kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                        <span class="kt-header__topbar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24" />
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                        <div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
                            <form method="get" class="kt-quick-search__form">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                    <input type="text" id="myInput" class="form-control kt-quick-search__input" placeholder="Search...">
                                    <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Kelas" data-placement="left">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000" />
                            </g>
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
            <div class="row">
                <div class="col">
                    <div class="kt-portlet " id="datatable-basic">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    <a href="#">{{$question->title}}</a>
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="dropdown dropdown-inline">
                                    @if (auth()->user()->name == $question->user->name )
                                    <button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-more-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">
                                                Export Options
                                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link editQuestions" data-uuid="{{$question->uuid}}" data-toggle="modal" data-target="#editQuestions">
                                                    <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                    <span class="kt-nav__link-text">Edit</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                    {{-- <a href="{{route('questions.delete', [$question->uuid])}}" class="kt-nav__link" onclick="return confirm('Are you sure?')">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Hapus</span>
                                    </a> --}}
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-widget3">
                                <div class="kt-widget3__item">
                                    <div class="kt-widget3__header">
                                        <div class="kt-widget3__user-img">
                                            <img class="kt-widget3__img" src="{{$question->user->photo}}" alt="">
                                        </div>
                                        <div class="kt-widget3__info">
                                            <a href="{{ $question->user->url }}" class="kt-widget3__username">
                                                {{ $question->user->name }}
                                            </a><br>
                                            <span class="kt-widget3__time">
                                                <small class="text-muted">{{ $question->created_date}}</small>
                                            </span>
                                        </div>
                                        <span class="kt-widget3__status kt-font-info">
                                            Q And A
                                        </span>
                                    </div>
                                    <div class="kt-widget3__body">
                                        <p class="kt-widget3__text" style="color: black;">
                                            {!! $question->body_html !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">

                    @foreach ($question->answers as $answer)
                    <div class="kt-portlet " id="datatable-basic">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                </h3>
                            </div>
                            @if (auth()->user()->name == $answer->user->name )
                            <div class="kt-portlet__head-toolbar">
                                <div class="dropdown dropdown-inline">

                                    <a href="{{route("kelas.questions.answers.edit", [$kelas, $question->uuid ,$answer->id]) }}" class="editQuestions btn btn-primary" >
                                        <span class="kt-nav__link-text">Edit</span>
                                    </a>
                                    <a href="{{route('answers.delete', $answer->id)}}" class="kt-nav__link btn btn-danger" onclick="return confirm('Are you sure?')">
                                        <span class="kt-nav__link-text">Hapus</span>
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="kt-portlet__body">
                            <div class="kt-widget3">
                                <div class="kt-widget3__item">
                                    <div class="kt-widget3__header">
                                        <div class="kt-widget3__user-img">
                                            <span class="kt-badge kt-badge--unified-success kt-badge--xl kt-badge--bold">
                                            @if($answer->user->photo)
                                            <img class="kt-badge kt-badge--unified-brand kt-badge--xl" alt="image" src="{{$answer->user->photo}}"" />
                                            @else
                                                {{ substr($answer->user->name,0,1) }}
                                            @endif
                                            </span>
                                        </div>
                                        <div class="kt-widget3__info">
                                            <a href="{{ $answer->user->url }}" class="kt-widget3__username">
                                                {{ $answer->user->name }}
                                            </a><br>
                                            <span class="kt-widget3__time">
                                                <small class="text-muted">{{ $answer->created_date}}</small>
                                            </span>
                                        </div>
                                        <span class="kt-widget3__status kt-font-info">

                                        </span>
                                    </div>
                                    <div class="kt-widget3__body">
                                        <p class="kt-widget3__text" style="color: black;">
                                            {!! $answer->body_html !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="kt-section">
                        <div class="kt-portlet kt-portlet--tab">
                            <ul class="kt-nav kt-nav--active-bg" id="kt_nav" role="tablist">
                                <li class="kt-nav__item kt-nav__item--active">
                                    <a class="kt-nav__link  collapsed" role="tab" id="kt_nav_link_2" data-toggle="collapse" href="#questions" aria-expanded="  false">
                                        <div class="kt-portlet__head" style="padding:0px; border-bottom:none;">
                                            <div class="kt-portlet__head-label">

                                                <span class="kt-badge kt-badge--unified-success kt-badge--xl kt-badge--bold">
                                                    @if(auth()->user()->photo)
                                                        <img class="kt-badge kt-badge--unified-brand kt-badge--xl" alt="image" src="{{ auth()->user()->photo }}" />
                                                    @else
                                                        {{ substr(auth()->user()->name,0,1) }}
                                                    @endif
                                                </span>

                                                <span class="kt-nav__link-text" style="margin-left:20px;">Bagikan sesatu dengan kelas anda</span>
                                            </div>
                                        </div>
                                    </a>

                                    <ul class="kt-nav__sub collapse" id="questions" role="tabpanel" aria-labelledby="m_nav_link_2" data-parent="#kt_nav">
                                        <form action="{{ route('kelas.questions.answers.store', [$kelas, $question->id] )}}" method="post">
                                            @csrf
                                            <div class="kt-portlet__body">
                                                <div class="kt-section">
                                                    <div class="form-group form-group-last">
                                                        <label for="exampleTextarea">Body</label>
                                                        <textarea name="body" id="question-body" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }} "></textarea>
                                                        @if ($errors->has('body'))
                                                            <div class="invalid-feedback">
                                                                <strong> {{$errors->first('body')}} </strong>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__foot">
                                                <div class="kt-form__actions">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="kt-portlet kt-portlet--tab">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <span class="kt-portlet__head-icon kt-hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h4 class="kt-portlet__head-title">
                                    Batas Waktu
                                </h4>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- Modal edit kelas-->
      <div class="modal fade" id="editQuestions" tabindex="-1" role="dialog" aria-labelledby="editModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form class="needs-validation" method="POST" action="" autocomplete="off" novalidate>
                    @csrf
                    @method("PUT")
                    <div class="modal-body">
                        <div class="form-group form-group-last">
                            <label for="exampleTextarea">Title</label>
                            <input type="text" name="title" value="" id="question-titleUpdate" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }} ">
                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong> {{$errors->first('title')}} </strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group form-group-last">
                            <label for="exampleTextarea">Body</label>
                            <textarea name="body" id="question-bodyUpdate" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }} "></textarea>
                            @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong> {{$errors->first('body')}} </strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="kt_blockui_4_4">update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>

    $('#datatable-basic').on('click', '.editQuestions', function() {
        var $uuid = $(this).attr('data-uuid');
        $.ajax({
            type: "POST",
            url: "{{ route('json.questionsEdit') }}",
            data: {
                token: '{{ csrf_token() }}',
                uuid: $uuid
            },
            dataType: "JSON",
            success: function(data) {
                $("#question-titleUpdate").val(data.title);
                $("#question-bodyUpdate").val(data.body);
            }
        });
    });
</script>
    <script src="{{asset('')}}/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
@endsection
