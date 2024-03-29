module.exports = {

    selectOptions: function(allOptions) {

        allOptions.count().then(function(numberOfItems) {
            return Math.floor(Math.random() * numberOfItems) + 1;
        }).then(function(randomNumber) {
            allOptions.get(randomNumber).getText().then(function(text) {
                globalDropDownSelection = text;
                console.log(globalDropDownSelection);
            });
            allOptions.get(randomNumber).click();
            browser.sleep(1000);
        });
    },

    selectFromList: function() {

    },

    titleValidation: function(globalDropDownSelection) {
        expect(browser.getTitle()).toContain(globalDropDownSelection);
    }

};
