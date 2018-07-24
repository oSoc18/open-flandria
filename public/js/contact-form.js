var $progressBar = $('progress');
var value = 0;

/**
 * Resets the form back to the default state.
 * ==========================================
 */
function formReset() {
    $('form input').not('button').removeClass('hasInput');
    $('.js-form-step').removeClass('left leaving');
    $('.js-form-step').not('.js-form-step[data-step="1"]').addClass('hidden waiting');
}


/**
 * Sets up and handles the float labels on the inputs.
 =====================================================
 */
function setupFloatLabels() {
    // Check the inputs to see if we should keep the label floating or not
    $('form input, form textarea').not('button').on('blur', function() {

        // Different validation for different inputs

        switch (this.tagName) {
            case 'TEXTAREA':
                if (this.value !== '') {
                    this.className = 'hasInput';
                } else {
                    this.className = '';
                }
                break;

            case 'INPUT':
                if (this.value !== '') {
                    this.className = 'hasInput';
                } else {
                    this.className = '';
                }
                break;
        }
    });

    return false;
}

/**
 * Gets the party started.
 * =======================
 */
function init() {
    formReset();
    setupFloatLabels();
    setupClickHandlers();
}

init();