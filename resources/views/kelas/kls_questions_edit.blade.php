@extends('layouts.layouts')
@section('content')

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
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
                                <div class="kt-widget3 kt-portlet__head-title">
                                    <div class="kt-widget3__item" style="margin-top:20px">
                                        <div class="kt-widget3__header">
                                            <div class="kt-widget3__user-img">
                                                <span class="kt-badge kt-badge--unified-success kt-badge--xl kt-badge--bold">
                                                @if($answers->user->photo)
                                                <img class="kt-badge kt-badge--unified-brand kt-badge--xl" alt="image" src="{{$answers->user->photo}}"" />
                                                @else
                                                    {{ substr($answers->user->name,0,1) }}
                                                @endif
                                                </span>
                                            </div>
                                            <div class="kt-widget3__info">
                                                <a href="{{ $answers->user->url }}" class="kt-widget3__username">
                                                    {{ $answers->user->name }}
                                                </a><br>
                                                <span class="kt-widget3__time">
                                                    <small class="text-muted">{{ $answers->created_date}}</small>
                                                </span>
                                            </div>
                                            <span class="kt-widget3__status kt-font-info">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="kt-portlet__body">
                            <form class="needs-validation" method="POST" action="{{route("kelas.questions.answers.update", [ $kelas ,$uuid, $answers->id])}}" autocomplete="off" novalidate>
                                @csrf
                                @method("PUT")
                                <div class="modal-body">
                                    <div class="form-group form-group-last">
                                        <label for="exampleTextarea">Body</label>
                                        <textarea name="body" id="question-bodyUpdate" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }} "> {{ $answers->body}}</textarea>
                                        @if ($errors->has('body'))
                                            <div class="invalid-feedback">
                                                <strong> {{$errors->first('body')}} </strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{route('kelas.questions.show', [ $kelas ,$uuid,] )}}" class="btn btn-outline-secondary"> Back to Questions</a>
                                    <button type="submit" class="btn btn-primary" id="kt_blockui_4_4">update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')

    <script src="{{asset('')}}/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
@endsection
