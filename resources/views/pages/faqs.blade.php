@extends('layouts.app')

@section('content')
    <div class="container mt-4 faqs">
        <h1 class="mb-4">Frequently Asked Questions</h1>
        <div class="accordion" id="accordionFaqs">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1Heading">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1Collapse" aria-expanded="true" aria-controls="faq1Collapse">
                        Question 1: What are some common work habits for remote workers?
                    </button>
                </h2>
                <div id="faq1Collapse" class="accordion-collapse collapse show" aria-labelledby="faq1Heading" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                         Some common work habits for remote workers include establishing a daily routine, setting boundaries between work and personal life, staying organized, and practicing effective communication.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2Heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2Collapse" aria-expanded="false" aria-controls="faq2Collapse">
                        Question 2: How can I develop effective work habits while working remotely?
                    </button>
                </h2>
                <div id="faq2Collapse" class="accordion-collapse collapse" aria-labelledby="faq2Heading" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                      To develop effective work habits while working remotely, establish a dedicated workspace, create a daily schedule, minimize distractions, and prioritize tasks based on importance and deadlines.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3Heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3Collapse" aria-expanded="false" aria-controls="faq3Collapse">
                        Question 3: What are some tips for improving work habits in a remote work environment?
                    </button>
                </h2>
                <div id="faq3Collapse" class="accordion-collapse collapse" aria-labelledby="faq3Heading" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                        Some tips for improving work habits in a remote work environment include setting specific goals, taking regular breaks, staying physically active, and seeking feedback for continuous improvement.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq4Heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4Collapse" aria-expanded="false" aria-controls="faq4Collapse">
                        Question 4: How can I maintain a healthy work-life balance while working remotely?
                    </button>
                </h2>
                <div id="faq4Collapse" class="accordion-collapse collapse" aria-labelledby="faq4Heading" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                         To maintain a healthy work-life balance while working remotely, establish boundaries between work and personal time, prioritize self-care activities, maintain regular working hours, and communicate openly with your team and family members.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq5Heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5Collapse" aria-expanded="false" aria-controls="faq5Collapse">
                        Question 5: How can I stay motivated and focused on my work hobbits while working remotely?
                    </button>
                </h2>
                <div id="faq5Collapse" class="accordion-collapse collapse" aria-labelledby="faq5Heading" data-bs-parent="#accordionFaqs">
                    <div class="accordion-body">
                        Some tips for staying motivated and focused on your work hobbits while working remotely include setting clear goals, creating a conducive work environment, taking regular breaks, and seeking support from colleagues or mentors.
                    </div>
                </div>
            </div>

            <!-- Add more FAQs here -->

        </div>
    </div>
@endsection
