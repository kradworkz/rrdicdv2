<template>
<div class="d-xl-flex">                
    <div class="w-100">
        <div class="card">
            
            <div class="card-body" v-if="view == false">
                <div class="row mb-3">
                    <div class="col-xl-6 col-sm-6 form-inline">
                    <button type="button" @click="addnew" class="btn btn-danger waves-effect waves-light mr-2"><i class='bx bx-plus-medical'></i></button>
                        <form class="form-inline">
                            <div class="search-box">
                                <div class="position-relative">
                                    <input type="text" class="form-control bg-light border-light rounded" placeholder="Search..." v-model="keyword" @keyup="fetch()">
                                    <i class='bx bx-search-alt search-icon'></i>
                                </div>
                            </div>
                        </form>  
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <ul class="list-inline user-chat-nav text-right mb-0 dropdown">
                            <li class="list-inline-item d-none d-sm-inline-block font-size-12">{{pagination.current_page}} out of {{pagination.last_page}}</li>
                            <li class="list-inline-item d-none d-sm-inline-block">
                                <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.prev_page_url}]" @click="fetch(pagination.prev_page_url)">
                                    <i class='bx bxs-chevron-left font-size-16'></i>
                                </a>
                            </li>
                            <li class="list-inline-item d-none d-sm-inline-block">
                                <a class="btn nav-btn" v-bind:class="[{disabled: !pagination.next_page_url}]" @click="fetch(pagination.next_page_url)">
                                    <i class='bx bxs-chevron-right font-size-16'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center">Title</th>  
                                <th class="text-center">Classification</th>
                                <th class="text-center">IPR Status</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Created Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="research in researches" v-bind:key="research.id">
                                <td class="text-center">{{research.title}}</td>
                                <td class="text-center">{{research.classification}}</td>
                                <td class="text-center">{{research.iprstatus}}</td>
                                <td class="text-center">
                                    <span :class="'font-size-11 badge badge-'+research.color">{{research.status}}</span>
                                </td>
                                <td class="text-center">{{research.created_at}}</td>
                                <td class="text-right">
                                    <a @click="show(research)" class="mr-3 text-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class='bx bx-show'></i></a>
                                    <!--<a class="mr-3 text-warning" @click="edit(institution)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class='bx bx-edit-alt' ></i></a>-->
                                    <a class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class='bx bx-trash'></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body" v-else-if="create == true">
                <research-add :edit="edit" :editresearch="research" @status="message"></research-add>
            </div>
            <div class="card-body" v-else>
                <research-view :research="research" @status="message"></research-view>
            </div>

        </div>
    </div>   
</div>
</template>

<script>
export default {
    props : ['usertype'],
    data(){
        return {
            currentUrl: window.location.origin,
            errors: [],
            pagination: {},
            keyword: '',
            researches : [],
            research: {},
            view: false,
            create: false,
            edit: false
        }
    },

    created(){
        this.fetch();
    },

    methods: {
        makePagination(meta, links) {
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev,
                total: meta.total,
            };
            this.pagination = pagination;
        },

        fetch(page_url) {
            let vm = this; let key;
            (this.keyword != '' && this.keyword != null) ? key = this.keyword : key = '-';
            page_url = page_url || this.currentUrl + '/request/researcher/researches/'+key;

            axios.get(page_url)
            .then(response => {
                this.researches = response.data.data;
                vm.makePagination(response.data.meta, response.data.links);
            })
            .catch(err => console.log(err));
        },

        show(research){
            this.research = research;
            this.view = true;
        },

        message(status) {
            if(status == true){
                this.view = false 
                this.create = false;
                this.fetch();
            }else if(status == 'edit'){
                this.create = true;
                this.edit = true;
            }else{
                this.view = true;
            }
        },

        addnew(){
            this.view = true;
            this.create = true;
            this.edit = false;
        }
    }, 
}
</script>