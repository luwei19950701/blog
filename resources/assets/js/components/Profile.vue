<template>
    <div class="blogerinfo shadow" v-if="items">
        <div class="blogerinfo-figure">
            <img src="/home/images/Absolutely.jpg" :alt="items.name" />
        </div>
        <p class="blogerinfo-nickname">{{items.name}}</p>
        <p class="blogerinfo-introduce">{{items.abstract}}</p>
        <p class="blogerinfo-location"><i class="fa fa-location-arrow"></i>&nbsp;安徽 - 铜陵</p>
        <hr />
        <div class="blogerinfo-contact">
            <a target="_blank" title="QQ交流" href="http://wpa.qq.com/msgrd?v=3&uin=1197329636&site=qq&menu=yes"><i class="fa fa-qq fa-2x"></i></a>
            <a target="_blank" title="给我写信" href="javascript:layer.msg('启动邮我窗口')"><i class="fa fa-envelope fa-2x"></i></a>
            <a target="_blank" title="新浪微博" href="javascript:layer.msg('转到你的微博主页')"><i class="fa fa-weibo fa-2x"></i></a>
            <a target="_blank" title="码云" href="javascript:layer.msg('转到你的github主页')"><i class="fa fa-git fa-2x"></i></a>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                items : false,
            }
        },
        mounted() {
            this.getList()
        },
        methods: {
            getList: function(p){
                let self = this
                axios.get('/api/profile').then(function(response){
                    self.items = response.data
                })
            }
        }


    }
</script>
