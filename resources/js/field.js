Nova.booting((Vue, router) => {
    Vue.component('index-romanian-date', require('./components/Index/DateField'))
    Vue.component('detail-romanian-date', require('./components/Detail/DateField'))
    Vue.component('form-romanian-date', require('./components/Form/DateField'))
})
