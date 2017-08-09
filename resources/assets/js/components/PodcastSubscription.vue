<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your podcast subscription</div>

                <div class="panel-body">
                    <div v-for="podcast in data">
                        <p>
                            <strong>{{ podcast.name }}</strong>

                            <br />

                            by {{ podcast.author }} - {{ podcast.genre }}
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
            return {};
        },

        mounted() {
            EventGarden.$emit('subscription-ready', {
                name: 'podcast',
                message: 'podcast says hi.',
                data: this.data,
            });
        }

    }
</script>
