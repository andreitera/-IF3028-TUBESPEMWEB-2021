
            var form = document.getElementById("form");
            var isi = document.getElementById("isi");
            var lampiran = document.getElementById("lampiran");
            var aspek = document.getElementById("aspek");
            form.addEventListener('submit', (e) => {
                if (
                    isi.value == "" &&
                    lampiran.value == "" &&
                    aspek.value == "false"
                ) {
                    alert("Pastikan ;anda mengisi semuanya");
                    e.preventDefault();
                } else if (isi.length() < 20) {
                    alert("Minimal panjang komentar 20");
                    e.preventDefault();
                }

            });
