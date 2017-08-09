<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your fruit subscription</div>

                <div class="panel-body">
                    <div v-for="item in data">
                        <p>
                            <strong>
                                <span v-if="item.is_daily">Daily</span>
                                {{ item.name }}
                            </strong>

                            <br />

                            by {{ item.company }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        props: [
            'data'
        ],

        data() {
            return {
            }
        },

        methods: {
            subscriptionReady(data) {
                if (data.name === 'keyboard') {
                    console.log('fruits got THE message!', data);
                } else {
                    console.log('fruits got unwanted message:', data.message);
                }
            }
        },

        created() {
            EventGarden.$on('subscription-ready', this.subscriptionReady);
        },

        mounted() {
            EventGarden.$emit('subscription-ready', {
                name: 'fruit',
                message: 'fruit says hi.',
                data: this.data,
            });
        }

    }
</script>
