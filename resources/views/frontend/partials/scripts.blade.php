<!-- JS here -->
<script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/jquery.odometer.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/jquery.appear.js"></script>
<script src="{{ asset('frontend') }}/assets/js/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/jquery.countdown.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/svg-inject.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/select2.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/jquery-ui.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/ajax-form.js"></script>
<script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/aos.js"></script>
<script src="{{ asset('frontend') }}/assets/js/main.js"></script>
{{-- <script src="{{ asset('frontend') }}/assets/js/flatpickr.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/form-advanced.init.js"></script> --}}
<script src="{{ asset('backend') }}/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<script>
    const text = document.querySelector('.circle');
    text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");

    const element = document.querySelectorAll('.circle span');
    for (let i = 0; i < element.length; i++) {
        element[i].style.transform = "rotate(" + i * 14.5 + "deg)"
    }
</script>
<script>
    // SVGInject(document.querySelectorAll("img.injectable"));
</script>
</body>

</html>
