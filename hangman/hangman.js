var Hangman = {

    init: function() {
        this.cacheDom();
        this.bindEvents();
        this.renderButtons();
        this.renderVisibleWord();
        // this.randomWord();
    },

    cacheDom: function() {
        this.$el = $('#hangman');
        this.$buttons = this.$el.find('#buttons');
        this.$chars = this.$el.find('.charButtons');
        this.$visibleWord = this.$el.find('#visibleWord');
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

    renderVisibleWord: function () {
        this.currentWord = this.randomWord().split('');
        for (var i = 0; i < this.currentWord.length; i++) {
            this.visibleWord.push('_');
        }
        this.$visibleWord.html(this.visibleWord);
        console.log(this.visibleWord, this.currentWord);
    },

    reRenderVisibleWord: function () {
        this.$visibleWord.html(this.visibleWord);
    },

    randomWord: function () {
        return this.words[Math.floor(Math.random() * this.words.length)];
    },

    guessChar: function() {
        self = Hangman;
        var guessedChar = $(this).children().html();
        $(this).css('visibility','hidden');
        self.checkChar(guessedChar);
    },

    checkChar: function(guessedChar) {
        for (var i = 0; i < this.currentWord.length; i++) {
            if(guessedChar == this.currentWord[i]) {
                this.visibleWord[i] = guessedChar;
            }
        }
        this.reRenderVisibleWord();
    },

    currentWord: [],

    visibleWord: [],

    lives: 10,

    words: ['LÅDBIL', 'YXSKAFT', 'LIAN', 'FLAGGSTÅNG', 'BETALTJÄNST', 'WELLPAPP', 'LAGERBLAD', 'ÖLMAGE', 'SPENAT', 'ROQUEFORTOST', 'HÄXBRYGD', 'BANANSKAL', 'DJÄVULSKAP', 'BANDIT'],

    chars: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'Å', 'Ä', 'Ö']
}

Hangman.init();
