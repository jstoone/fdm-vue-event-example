<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your keyboard subscription</div>

                <div class="panel-body">
                    <div v-for="item in data">
                        <p>
                            <strong>
                                <span v-if="item.is_mechanical">Mechanical</span>
                                {{ item.name }}
                            </strong>

                            <br />

                            <span v-if="item.is_mechanical">
                                Geared with {{ item.switch_brand }} {{ item.switch_color }}'s
                            </span>
                            <span v-else>
                                Not geared with mechanical keyswitches.
                            </span>
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

        mounted() {
            EventGarden.$emit('subscription-ready', {
                name: 'keyboard',
                message: 'keyboard says hi.',
                data: this.data,
            });
        }

    }
</script>
