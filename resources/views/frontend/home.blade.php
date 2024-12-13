<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Right Click and Double Click Text to Speech</title>
</head>
<body>
    <h1>Saytdagi matnni sichqonchaning o'ng tugmasi bilan ikki marta bosib aytish</h1>

    <!-- Sayt matnini chiqarish -->
    <div id="content">
        <p>Matnni sichqonchaning o'ng tugmasi bilan ikki marta bosib ovozli tarzda eshitishingiz mumkin.</p>
    </div>

    <script>
        // Ovoz chiqarish funksiyasi
        function speakText(text) {
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.rate = 1;      // Ovoz tezligi
            utterance.volume = 1;    // Ovoz balandligi
            utterance.pitch = 1;     // Ovoz balandligi
            window.speechSynthesis.speak(utterance);
        }

        // Textni ikki marta bosganda ovoz bilan aytish
        let doubleClickTimeout;

        document.getElementById("content").addEventListener("dblclick", function(event) {
            const text = window.getSelection().toString();
            if (text) {
                speakText(text);
            }
        });

        // O'ng tugma bilan ikki marta bosish (contextmenu) va matnni ovoz bilan aytish
        document.getElementById("content").addEventListener("contextmenu", function(event) {
            event.preventDefault();  // O'ng tugma kontekst menyusini to'xtatish

            // Har safar o'ng tugma bosilganda, ikki marta bosish vaqtini tekshirish
            if (doubleClickTimeout) clearTimeout(doubleClickTimeout);

            doubleClickTimeout = setTimeout(function() {
                // O'ng tugma bilan ikki marta bosilganda, tanlangan matnni ovoz bilan aytish
                const text = window.getSelection().toString();
                if (text) {
                    speakText(text);
                }
            }, 300);  // 300 ms oraliqda ikki marta bosishni kutish
        });
    </script>
</body>
</html>
