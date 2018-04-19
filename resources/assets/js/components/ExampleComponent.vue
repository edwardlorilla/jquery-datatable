<template>
    <div class="container">
        <h3>Vue Datatable example</h3>
        Filter by anything: <input v-model="search">
        <hr>
        <data-table :users="filteredUsers"></data-table>
    </div>
</template>

<script>
    import DataTable from './DataTable.vue'
    export default {
        components:{
            DataTable
        },
        data(){
            return {
                users: [],
                search: ''
            }
        },
        computed: {
            filteredUsers: function () {
                let self = this
                let search = self.search.toLowerCase()
                return self.users.filter(function (comments) {
                    return comments.name.toLowerCase().indexOf(search) !== -1 ||
                        comments.email.toLowerCase().indexOf(search) !== -1
                })
            }
        },
        mounted() {
            let vm = this;
            $.ajax({
                url: '/api/users',
                success(res) {
                    vm.users = res;
                }
            });
        }
    }
</script>
