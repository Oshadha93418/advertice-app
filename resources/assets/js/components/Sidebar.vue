<template>
  <sidebar-menu :menu="menu" />
</template>

<script>
import VueSidebarMenu from 'vue-sidebar-menu'
    export default {
        components: {
            sidebarMenu : VueSidebarMenu
        },
        data() {
            menu: [
                {
                    href: '/',
                    title: 'Dashboard',
                    icon: 'fa fa-user'
                },
                {
                    href: '#',
                    title: 'Charts',
                    icon: 'fa fa-chart-area'
                },
            ]
        }
    }
</script>
