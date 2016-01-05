// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var quizName = "CSS Position";


var quizJSON = {
    "info": {
        "name":    quizName,
        "main":    "",
        "results": "Dziękuję za udzielenie wszystkich odpowiedzi.",
    },
    "questions": [
        { // Question 1 - Multiple Choice, Single True Answer
            "q": "Jaka jest domyślna wartość właściwości position?",
            "a": [
                {"option": "relative",      "correct": false},
                {"option": "fixed",     "correct": false},
                {"option": "static",      "correct": true},
                {"option": "absolute",     "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "Aby ustawić element na sztywnej pozycji względem ekranu, należy użyć?",
            "a": [
                {"option": "relative",      "correct": false},
                 {"option": "fixed",     "correct": true},
                 {"option": "static",      "correct": false},
                 {"option": "absolute",     "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "Dla których elementów można ustawić właściowść position?",
            "a": [
                {"option": "wszystkich blokowych",           "correct": false},
                {"option": "tylko dla div i span",                  "correct": false},
                {"option": "dla wszystkich",  "correct": true}
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 4
            "q": "Aby przesunąć element względem górnej krawędzi należy użyć właściowści?",
            "a": [
                {"option": "above",    "correct": false},
                {"option": "top",     "correct": true},
                {"option": "bottom",      "correct": false},
                {"option": "position-top",   "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        },
        { // Question 4
            "q": "Czy wartość left można ustawić używając wartości procentowych?",
            "a": [
                {"option": "Yes",    "correct": true},
                {"option": "No",     "correct": false} // no comma here
            ],
            "correct": "Odpowiedź poprawna",
            "incorrect": "Odpowiedź błędna"
        }
]
};
