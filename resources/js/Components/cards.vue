<template>
    <div class="grid gap-4 sm:grid-cols-1 lg:grid-cols-2 p-4">
        <div
            v-for="(project, index) in projects"
            :key="index"
            class="bg-white shadow-md rounded-lg overflow-hidden"
        >
            <img
                :src="project.image"
                alt="Project Image"
                class="h-40 w-full object-cover"
            />
            <div class="p-4">
                <h2 class="text-xl font-bold text-gray-800">{{ project.title }}</h2>
                <p class="text-gray-600">{{ project.description }}</p>
                <p class="mt-2 text-green-500 font-semibold">
                    {{ project.status }}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            projects: [
                {
                    image: 'data:image/jpeg;base64,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',
                    title: 'TipBrat Studios',
                    description:
                        'Solar System Installation at TipBrat Studios, Obudu, Cross River State, Nigeria',
                    status:  'In progress',
                },            {
                    image: 'https://www.elsierenewables.energy/_nuxt/img2.097224b2.jpeg',
                    title: 'Flourish Digitals',
                    description:
                        'A solar power system has been successfully installed at Flourish Digitals, Obudu, Cross River State, Nigeria.',
                    status: 'Completed & Operational',
                },
                {
                    image: 'https://5.imimg.com/data5/YG/DG/MY-41101521/domestic-solar-panel-500x500.jpg',
                    title: 'STechMax Head Office',
                    description:
                        'A solar power system has been successfully installed at STechMax Head Office, Obudu, Cross River State, Nigeria',
                    status: 'Completed & Operational',
                },
                {
                    image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8rWBH0ThkQFxAHvxt6bNJ87ZLDV6LYzgoRYotBfMo1_Z4p9-eZHu90b7MGW-5zTtybhY&usqp=CAU',
                    title: 'VRODEN Nig. LTD',
                    description:
                        'A solar power system has been successfully installed at VRoden, Obudu, Cross River State, Nigeria',
                    status: 'Completed & Operational',
                },
                // Add more projects as necessary
            ],
        };
    },
};
</script>

