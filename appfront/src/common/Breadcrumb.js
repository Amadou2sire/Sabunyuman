import React from "react";

function Breadcrumb({ items }) {
    return (
        <nav className="mt-5 py-4 container" aria-label="breadcrumb">
            <ol className="breadcrumb">
                {items.map((item, index) => (
                    <li key={index} className={`breadcrumb-item ${index === items.length - 1 ? 'active' : ''}`} aria-current={index === items.length - 1 ? 'page' : null}>
                        {index !== items.length - 1 ? <a href={item.url}>{item.label}</a> : item.label}
                    </li>
                ))}
            </ol>
        </nav>
    );
}

export default Breadcrumb;
