$(function(){
    // form amount
    $(document).on('click', '.btnAmount', function(e){
        e.preventDefault();

        modalOpen('modalAmount');
        console.log('btnAmount');
    });

    // close modal by btn cross
    $(document).on('click', '.btnCloseModal', function(e){
        e.preventDefault();

        closeModal('openModal');
    });


    $('.modalContainer').on('click', function(e) {
        const dialog = $('.modalDialog');

        if (!$(e.target).closest(dialog).length) {
            closeModal('openModal');
        }
    });

    const modalOpen = (modalClass) => {
        const modal = $(`.${modalClass}`);

        modal.addClass('openModal');
        modal.find('input,textarea,button').first().focus();
    };

    const closeModal = (modalClass) => {
        const modal = $(`.${modalClass}`);

        modal.removeClass('openModal');
    };

    // handling submit from forms
    $('.formModal').on('submit', function(e) {
        e.preventDefault();

        let form = $(this);
        dataForm = form.serialize();

        console.log('dataForm: ', dataForm);
    });
});