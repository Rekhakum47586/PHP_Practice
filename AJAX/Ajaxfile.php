define([
    'jquery',
    'mage/translate',
    'jquery/ui',
    'mage/mage'
], submitForm: function (form) {
            var self = this;
            $.ajax({
                url: form.attr('action'),
                data: form.serialize(),
                type: 'post',
                dataType: 'json',
                showLoader: true,
                /** @inheritdoc */
                beforeSend: function () {
                    self.element.parent().find('.messages').remove();
                },
                success: function (response) {
                    if (response.error) {
                        self.element.after('<div class="messages"><div class="message message-error error"><div>'+response.message+'</div></div></div>');
                    } else {
                        self.element.find('input').val('');
                        self.element.after('<div class="messages"><div class="message message-success success"><div>'+response.message+'</div></div></div>');
                    }
                },
                
                )
