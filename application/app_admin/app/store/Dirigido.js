/*
 * File: app/store/Dirigido.js
 *
 * This file was generated by Sencha Architect version 2.1.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 4.1.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 4.1.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('vision.store.Dirigido', {
    extend: 'Ext.data.Store',

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'MyArrayStore3',
            data: [
                {
                    id_dir: '1',
                    value: 'Arquitectura'
                },
                {
                    id_dir: '2',
                    value: 'Ing. Sistemas'
                },
                {
                    id_dir: '3',
                    value: 'Ing. Industrial'
                },
                {
                    id_dir: '3',
                    value: 'Ing. Electrionica'
                },
                {
                    id_dir: '3',
                    value: 'Ing. Civil'
                },
                {
                    id_dir: '3',
                    value: 'Industrias Alimentarias'
                }
            ],
            proxy: {
                type: 'ajax',
                reader: {
                    type: 'array'
                }
            },
            fields: [
                {
                    name: 'id_dir'
                },
                {
                    name: 'value'
                }
            ]
        }, cfg)]);
    }
});