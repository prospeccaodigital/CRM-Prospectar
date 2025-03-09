@if (isset($attribute))
    <v-price-component
        :attribute="{{ json_encode($attribute) }}"
        :validations="'{{ $validations }}'"
        :value="{{ json_encode(old($attribute->code) ?? $value) }}"
    >
    </v-price-component>
@endif

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-price-component-template"
    >
        <x-admin::form.control-group.control
            type="text"
            ::id="attribute.code"
            ::value="formattedValue"
            ::name="attribute.code"
            ::rules="validations"
            ::label="attribute.name"
            @input="handleInput"
        />
    </script>

    <script type="module">
        app.component('v-price-component', {
            template: '#v-price-component-template',

            props: ['validations', 'attribute', 'value'],

            data() {
                return {
                    formattedValue: this.formatPrice(this.value || 0),
                };
            },

            methods: {
                formatPrice(value) {
                    const numericValue = parseFloat(value);
                    if (isNaN(numericValue)) return '0,00';
                    return numericValue.toLocaleString('pt-BR', {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                },

                handleInput(event) {
                    let value = event.target.value;
                    
                    // Remove tudo exceto números e vírgula
                    value = value.replace(/[^\d,]/g, '');
                    
                    // Garante apenas uma vírgula
                    value = value.replace(/,/g, function(match, offset, string) {
                        return string.indexOf(',') === offset ? match : '';
                    });

                    // Converte para número
                    const numericValue = parseFloat(value.replace(',', '.')) || 0;
                    
                    // Atualiza o valor formatado
                    this.formattedValue = this.formatPrice(numericValue);
                    
                    // Emite o evento com o valor numérico
                    this.$emit('input', numericValue);
                }
            },

            watch: {
                value: {
                    handler(newValue) {
                        this.formattedValue = this.formatPrice(newValue || 0);
                    },
                    immediate: true
                }
            }
        });
    </script>
@endPushOnce