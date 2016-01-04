// Put all your page JS here


function foo(options) {
    var url = "https://online-quize-result.herokuapp.com/quiz/"+quizName
    url += "/"+options.questionIndex;
    url += "/"+options.correct;
	$.get(url);
}

$(function () {
    $('#slickQuiz').slickQuiz(
	{events:{onAnswerCheck:foo},
	 disableRanking:true,
	 checkAnswerText:"Sprawdz",
	 nextQuestionText: 'Dalej &raquo;',
	 questionCountText: 'Pytanie %current/%total',
	 }
);
});
