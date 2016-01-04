// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var quizName = "Podstawy PHP";


var quizJSON = {
    "info": {
        "name":    "Podstawy PHP",
        "main":    "",
        "results": "Dziękuję za udzielenie wszystkich odpowiedzi.",
    },
    "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "Co oznacza skrót PHP?",
            "a": [
                {"option": "Pre HTML Procesor",      "correct": false},
                {"option": "Public HTML Procesor",     "correct": false},
                {"option": "PHP: Hypertext Preprocessor",      "correct": true},
                {"option": "Public HTML Page",     "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "Skrypty php powinny znajdować się wewnątrz?",
            "a": [
                {"option": "&lt?php ... ?>",               "correct": true},
                {"option": " &lt&>...&lt/&>",   "correct": false},
                {"option": "&ltscript&gt...&lt/script&gt",               "correct": false},
                {"option": "&lt?php&gt...&lt?&gt", "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "Jak wyświetlić napis \"Hello World\" w PHP?",
            "a": [
                {"option": "Document.Write(\"Hello World\");",           "correct": false},
                {"option": "\"Hello World\";",                  "correct": false},
                {"option": "echo \"Hello World\";",  "correct": true}
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 4
            "q": "Jak odczytać parametr przesłany do PHP za pomocą metody GET?",
            "a": [
                {"option": "GET();",    "correct": false},
                {"option": " $_GET[];",     "correct": true},
                {"option": "FORM_GET[]",      "correct": false},
                {"option": "$_FORM[]",   "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 4
            "q": "Jak odczytać wartość zmiennej liczba?",
            "a": [
                {"option": "liczba",    "correct": false},
                {"option": "$liczba",     "correct": true},
                {"option": "#liczba",      "correct": false},
                {"option": "_liczba",   "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 5
            "q": "W PHP napisy można tworzyć używając \". Na przykład \"Hello world\"?",
            "a": [
                {"option": "Yes",    "correct": true},
                {"option": "No",     "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 5
            "q": "W PHP napisy można tworzyć używając '. Na przykład 'Hello world'?",
            "a": [
                {"option": "Yes",    "correct": true},
                {"option": "No",     "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 5
            "q": "Aby wysłać dane ze strony HTML do skryptu o nazwie <strong>logowanie.php</strong>, należy użyć kodu?",
            "a": [
                {"option": "&lt form action=\"logowanie.php\" method=\"POST\"&gt",    "correct": true},
                {"option": "&lt form action=\"logowanie\" method=\"PHP\"&gt",    "correct": false},
                {"option": "&lt post action=\"logowanie.php\"&gt",    "correct": false},
                {"option": "&lt send action=\"logowanie.php\" method=\"POST\"&gt",    "correct": false}
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        }, // no comma here
        { // Question 5
            "q": "Zakładając że zmienna <i>liczba</i> ma wartość 3. Co wypisze kod <i>echo 'Liczba = $liczba'</i>?",
            "a": [
                {"option": "Liczba = $liczba",    "correct": true},
                {"option": "Liczba = ",    "correct": false},
                {"option": "Liczba = 3",    "correct": false}
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        }, // no comma here
         { // Question 5
             "q": "Zakładając że zmienna <i>liczba</i> ma wartość 3. Co wypisze kod <i>echo \"Liczba = $liczba\"</i>?",
             "a": [
                 {"option": "Liczba = $liczba",    "correct": false},
                 {"option": "Liczba = ",    "correct": false},
                 {"option": "Liczba = 3",    "correct": true}
             ],
             "correct": "Odpowiedź poprawna",
             "incorrect": "Odpowiedź błędna"
         } // no comma here
]
};
