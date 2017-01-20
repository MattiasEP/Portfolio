var Hangman = {

    init: function() {
        this.cacheDom();
        this.bindEvents();
        this.renderButtons();
        this.randomWord();
    },

    cacheDom: function() {
        this.$el = $('#hangman');
        this.$buttons = this.$el.find('#buttons');
        this.$chars = this.$el.find('.charButtons');
    },

    bindEvents: function() {
        $(document).on('click', '.charButtons' , this.guessChar);
    },

    renderButtons: function () {
        var charButtons = '';
        this.chars.map( (x) => {
            charButtons += `<button class='charButtons'><span class='chars'>${x}</span></button>`;
        })
        this.$buttons.html(charButtons);
    },

    randomWord: function () {
        return this.words[Math.floor(Math.random() * this.words.length)];
    },

    guessChar: function() {
        var guessedChar = $(this).children().html();
        $(this).css('visibility','hidden');
        console.log(guessedChar);
    },

    words: ['LÅDBIL', 'YXSKAFT', 'LIAN', 'FLAGGSTÅNG', 'BETALTJÄNST', 'WELLPAPP', 'LAGERBLAD', 'ÖLMAGE', 'SPENAT'],

    chars: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'Å', 'Ä', 'Ö']
}

Hangman.init();
