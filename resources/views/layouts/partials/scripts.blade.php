{{-- @vite(['resources/js/app.js', 'resources/js/dark.js']) --}}
@vite(['resources/js/app.js'])

<script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/vendors/tinymce/tinymce.min.js') }}"></script>


<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('/js/main.js') }}"></script>
{{-- <script src="{{ asset('/js/extensions/toastify.js') }}"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script>
    const THEME_KEY = "theme";
    const THEME_REGEX = /\btheme-[a-z0-9]+\b/g;
    const toggler = document.getElementById("toggle-dark");

    export function toggleDarkTheme() {
        setTheme(
            document.body.classList.contains("theme-dark") ?
            "theme-light" :
            "theme-dark"
        );
    }

    /**
     * Set theme for mazer
     * @param {"theme-dark"|"theme-light"} theme
     */
    export function setTheme(theme, dontPersist = false) {
        document.body.className = document.body.className.replace(THEME_REGEX, "");
        console.log("change theme to ", theme);
        document.body.classList.add(theme);
        toggler.checked = theme == "theme-dark";

        if (!dontPersist) {
            localStorage.setItem(THEME_KEY, theme);
        }
    }

    toggler.addEventListener("input", (e) => {
        setTheme(e.target.checked ? "theme-dark" : "theme-light");
    });

    document.addEventListener("DOMContentLoaded", () => {
        console.log("Dark Loaded");

        //If the user manually set a theme, we'll load that
        let storedTheme;
        if ((storedTheme = localStorage.getItem(THEME_KEY))) {
            return setTheme(storedTheme);
        }

        //Detect if the user set his preferred color scheme to dark
        if (!window.matchMedia) {
            return;
        }

        //Media query to detect dark preference
        const mediaQuery = window.matchMedia("(prefers-color-scheme: dark)");

        //Register change listener
        mediaQuery.addEventListener("change", (e) =>
            setTheme(e.matches ? "theme-dark" : "theme-light", true)
        );

        return setTheme(mediaQuery.matches ? "theme-dark" : "theme-light", true);
    });

    $("#example").dataTable({
        columnDefs: [{
            "defaultContent": "-",
            "targets": "_all"
        }]
    });

    $('.select2').select2({
        dropdownParent: $('#tambah .modal-content')
    });
    $('.select2-wire').select2({
        width: '100%' // Pastikan lebar selektor mengisi penuh kontainer
    });

    function pencarian(inputId, tblId) {

        $(document).on('keyup', "#" + inputId, function() {
            var value = $(this).val().toLowerCase();
            $(`#${tblId} tbody tr`).filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        })

    }
</script>

@if (session()->has('sukses'))
    <script>
        $(document).ready(function() {
            Toastify({
                text: "{{ session()->get('sukses') }}",
                duration: 5000,
                position: 'center',
                style: {
                    background: "#EAF7EE",
                    color: "#7F8B8B",
                    fontSize: "15px", // Menyesuaikan ukuran teks
                },
                close: true,
                avatar: "https://cdn-icons-png.flaticon.com/512/190/190411.png"
            }).showToast();
        });
    </script>
@endif
@if (session()->has('error'))
    <script>
        $(document).ready(function() {
            Toastify({
                text: "{{ session()->get('error') }}",
                duration: 5000,
                position: 'center',
                style: {
                    background: "#FCEDE9",
                    color: "#7F8B8B",
                    fontSize: "15px", // Menyesuaikan ukuran teks
                },
                close: true,
                avatar: "https://cdn-icons-png.flaticon.com/512/564/564619.png"
            }).showToast();
        });
    </script>
@endif
@yield('scripts')
{{ $script ?? '' }}
@livewireScripts
