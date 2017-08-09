<template>
    <div class="container">
        <div class="row" v-if="user">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center">
                    {{ user.name }}
                </h1>
            </div>
        </div>
        <podcast-subscription
            v-if="hasPodcasts()"
            :data="podcasts"
        ></podcast-subscription>

        <fruit-subscription
            v-if="hasFruits()"
            :data="fruits"
        ></fruit-subscription>

        <keyboard-subscription
            v-if="hasKeyboards()"
            :data="keyboards"
        ></keyboard-subscription>
    </div>
</template>

<script>
    import PodcastSubscription from './PodcastSubscription.vue';
    import FruitSubscription from './FruitSubscription.vue';
    import KeyboardSubscription from './KeyboardSubscription.vue';

    export default {

        components: {
            PodcastSubscription,
            FruitSubscription,
            KeyboardSubscription,
        },

        data() {
            return {
                user: null,
            }
        },

        computed:  {
            podcasts() {
                if (! this.userIsLoaded()) {
                    return null;
                }

                return this.user.podcasts;;
            },

            fruits() {
                if (! this.userIsLoaded()) {
                    return null;
                }

                return this.user.fruits;
            },

            keyboards() {
                if (! this.userIsLoaded()) {
                    return null;
                }

                return this.user.fruits;
            }
        },

        methods: {
            userIsLoaded() {
                return this.user !== null;
            },

            hasPodcasts() {
                return this.podcasts !== null && this.podcasts.length;
            },
            hasFruits() {
                return this.fruits !== null && this.fruits.length;
            },
            hasKeyboards() {
                return this.keyboards !== null && this.keyboards.length;
            },

            subscriptionReady(data) {
                console.log('member got message:', data.message);
            }

        },

        created() {
            EventGarden.$on('subscription-ready', this.subscriptionReady);
        },

        mounted() {
            axios.get('/subscriptions').then(response => {
                this.user = response.data;
            });
        }

    }
</script>
