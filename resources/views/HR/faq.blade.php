@extends('HR.hrlayouts')
@section('content')
<div class=" page-content-wrapper">

    <div class="page-content hero2">
        <div class="portlet light bordered " id="form_wizard_1">
            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section_no">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>FAQ</h2>

                    </div>

                    <div class="faq-list">
                        <ul>
                            @foreach($faqs as $key =>$faq)
                            <li class="info_bg font-white" data-aos="fade-up" data-aos-delay="100">
                                <div class="box-bd">
                                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-{{$faq->id}}">{{isset($faq->question)?$faq->question:''}}
                                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                                    <i class="bx bx-chevron-up icon-close"></i></a>
                                </div>
                                <div id="faq-list-{{$faq->id}}" class="collapse " data-bs-parent=".faq-list">
                                    <p>
                                       {{isset($faq->answer)?$faq->answer:''}}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </section>
            <!-- End Frequently Asked Questions Section -->
        </div>
    </div>
</div>

@endsection