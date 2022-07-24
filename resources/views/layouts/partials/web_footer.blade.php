<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-12 footer-info">
          <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            {{-- <img src="{{ asset('website/assets/img/logo.png') }}" alt=""> --}}
            <span>{{ $content->name }}</span>
          </a>
          <div>{!! Str::words($content->about, 30, '') !!}</div>
          <div class="social-links mt-3">
            <a href="{{ $content->twitter }}" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="{{ $content->facebook }}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="{{ $content->instagram }}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="{{ $content->linkedin }}" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('product') }}">Product</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('faq') }}">FAQ</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('gallery') }}">Gallery</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('team') }}">Team</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('webnews') }}">News & Events</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            <span class="text-wrap">{{ $content->address }}</span>
            <a href="tel: {{ $content->phone }}"><strong>Phone:</strong> {{ $content->phone }}</a><br>
            <a href="mailto: {{ $content->email }}"><strong>Email:</strong> {{ $content->email }}</a><br>
          </p>

        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Map</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.338326674586!2d90.36699521429803!3d23.806565392546872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72d1a5bf2a9%3A0x25a0f9a592e96ad8!2sLink-Up%20Technology%20Ltd.!5e0!3m2!1sen!2sbd!4v1658576232072!5m2!1sen!2sbd" width="100%" height="200" style="border: 2px solid #bfb4b4;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>{{ $content->name }}</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed & Developed by <a href="http://linktechbd.com/" target="_blank">Link Up Technology Ltd.</a>
    </div>
  </div>
  </footer><!-- End Footer -->