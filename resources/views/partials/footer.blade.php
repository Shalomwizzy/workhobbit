<footer id="footer" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h3>Workhobbit</h3>
                <img src="{{ asset('images/workhobbit_081437.jpg') }}" alt="Workhobbit Logo" class="footer-logo">
            </div>
            <div class="col-lg-4">
                <h3>Quick Links</h3>
                <ul class="list-unstyled">
                    {{-- <li><a href="#">Our Goal</a></li>
                    <li><a href="#">Our Mission</a></li> --}}
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('faqs') }}">Faqs</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h3>Connect With Us</h3>
                <ul class="list-unstyled social-icons">
                    {{-- <li><a href="#">Facebook <i class="fab fa-facebook-f"></i></a></li> --}}
                    {{-- <li><a href="#">Twitter <i class="fab fa-twitter"></i></a></li> --}}
                    <li><a href="#">Instagram <i class="fab fa-instagram"></i></a></li>
                    <li><a href="#">Linkedin <i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="text-white">&copy; 2024 Work Hobbit. All rights reserved.</p>
        </div>
    </div>
</footer>