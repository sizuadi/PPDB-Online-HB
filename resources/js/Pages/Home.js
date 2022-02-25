import React from 'react';
import { Head } from '@inertiajs/inertia-react';

export default function Welcome(props) {
    console.log('[props]', props);
    
    return (
        <>
            <Head title="Welcome" />
            <p>Home</p>
        </>
    );
}
