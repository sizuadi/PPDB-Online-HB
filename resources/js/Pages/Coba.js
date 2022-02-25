import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';

export default function Coba(props) {
    console.log('[props]', props);

    return (
        <>
            <Head title="Welcome" />
            <p>Coba component</p>
        </>
    );
}
