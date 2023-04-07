<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection supplierinformation
     * @property Grid\Column|Collection setresource
     * @property Grid\Column|Collection getkey
     * @property Grid\Column|Collection imge
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection FlowNo
     * @property Grid\Column|Collection Title
     * @property Grid\Column|Collection BusType
     * @property Grid\Column|Collection AddUserNo
     * @property Grid\Column|Collection ApproStatus
     * @property Grid\Column|Collection AuditUserNo
     * @property Grid\Column|Collection AuditRemark
     * @property Grid\Column|Collection AuditTime
     * @property Grid\Column|Collection AuditStatus
     * @property Grid\Column|Collection material_information_id
     * @property Grid\Column|Collection inventory_exchanges_id
     * @property Grid\Column|Collection claim_orders
     * @property Grid\Column|Collection applicant
     * @property Grid\Column|Collection quantity
     * @property Grid\Column|Collection request_at
     * @property Grid\Column|Collection order_status
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection inventory_batches
     * @property Grid\Column|Collection inventory_id
     * @property Grid\Column|Collection inbound_order
     * @property Grid\Column|Collection quantity_received
     * @property Grid\Column|Collection acceptance_at
     * @property Grid\Column|Collection m_byword
     * @property Grid\Column|Collection m_categories
     * @property Grid\Column|Collection m_name
     * @property Grid\Column|Collection m_brand
     * @property Grid\Column|Collection m_type
     * @property Grid\Column|Collection m_unit
     * @property Grid\Column|Collection m_description
     * @property Grid\Column|Collection m_price
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection expires_at
     * @property Grid\Column|Collection resolvent
     * @property Grid\Column|Collection video
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection requisition_orders
     * @property Grid\Column|Collection request_time
     * @property Grid\Column|Collection s_byword
     * @property Grid\Column|Collection s_name
     * @property Grid\Column|Collection s_contact
     * @property Grid\Column|Collection s_phone
     * @property Grid\Column|Collection supplier_id
     * @property Grid\Column|Collection material_id
     *
     * @method Grid\Column|Collection supplierinformation(string $label = null)
     * @method Grid\Column|Collection setresource(string $label = null)
     * @method Grid\Column|Collection getkey(string $label = null)
     * @method Grid\Column|Collection imge(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection FlowNo(string $label = null)
     * @method Grid\Column|Collection Title(string $label = null)
     * @method Grid\Column|Collection BusType(string $label = null)
     * @method Grid\Column|Collection AddUserNo(string $label = null)
     * @method Grid\Column|Collection ApproStatus(string $label = null)
     * @method Grid\Column|Collection AuditUserNo(string $label = null)
     * @method Grid\Column|Collection AuditRemark(string $label = null)
     * @method Grid\Column|Collection AuditTime(string $label = null)
     * @method Grid\Column|Collection AuditStatus(string $label = null)
     * @method Grid\Column|Collection material_information_id(string $label = null)
     * @method Grid\Column|Collection inventory_exchanges_id(string $label = null)
     * @method Grid\Column|Collection claim_orders(string $label = null)
     * @method Grid\Column|Collection applicant(string $label = null)
     * @method Grid\Column|Collection quantity(string $label = null)
     * @method Grid\Column|Collection request_at(string $label = null)
     * @method Grid\Column|Collection order_status(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection inventory_batches(string $label = null)
     * @method Grid\Column|Collection inventory_id(string $label = null)
     * @method Grid\Column|Collection inbound_order(string $label = null)
     * @method Grid\Column|Collection quantity_received(string $label = null)
     * @method Grid\Column|Collection acceptance_at(string $label = null)
     * @method Grid\Column|Collection m_byword(string $label = null)
     * @method Grid\Column|Collection m_categories(string $label = null)
     * @method Grid\Column|Collection m_name(string $label = null)
     * @method Grid\Column|Collection m_brand(string $label = null)
     * @method Grid\Column|Collection m_type(string $label = null)
     * @method Grid\Column|Collection m_unit(string $label = null)
     * @method Grid\Column|Collection m_description(string $label = null)
     * @method Grid\Column|Collection m_price(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection expires_at(string $label = null)
     * @method Grid\Column|Collection resolvent(string $label = null)
     * @method Grid\Column|Collection video(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection requisition_orders(string $label = null)
     * @method Grid\Column|Collection request_time(string $label = null)
     * @method Grid\Column|Collection s_byword(string $label = null)
     * @method Grid\Column|Collection s_name(string $label = null)
     * @method Grid\Column|Collection s_contact(string $label = null)
     * @method Grid\Column|Collection s_phone(string $label = null)
     * @method Grid\Column|Collection supplier_id(string $label = null)
     * @method Grid\Column|Collection material_id(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection supplierinformation
     * @property Show\Field|Collection setresource
     * @property Show\Field|Collection getkey
     * @property Show\Field|Collection imge
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection FlowNo
     * @property Show\Field|Collection Title
     * @property Show\Field|Collection BusType
     * @property Show\Field|Collection AddUserNo
     * @property Show\Field|Collection ApproStatus
     * @property Show\Field|Collection AuditUserNo
     * @property Show\Field|Collection AuditRemark
     * @property Show\Field|Collection AuditTime
     * @property Show\Field|Collection AuditStatus
     * @property Show\Field|Collection material_information_id
     * @property Show\Field|Collection inventory_exchanges_id
     * @property Show\Field|Collection claim_orders
     * @property Show\Field|Collection applicant
     * @property Show\Field|Collection quantity
     * @property Show\Field|Collection request_at
     * @property Show\Field|Collection order_status
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection inventory_batches
     * @property Show\Field|Collection inventory_id
     * @property Show\Field|Collection inbound_order
     * @property Show\Field|Collection quantity_received
     * @property Show\Field|Collection acceptance_at
     * @property Show\Field|Collection m_byword
     * @property Show\Field|Collection m_categories
     * @property Show\Field|Collection m_name
     * @property Show\Field|Collection m_brand
     * @property Show\Field|Collection m_type
     * @property Show\Field|Collection m_unit
     * @property Show\Field|Collection m_description
     * @property Show\Field|Collection m_price
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection expires_at
     * @property Show\Field|Collection resolvent
     * @property Show\Field|Collection video
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection requisition_orders
     * @property Show\Field|Collection request_time
     * @property Show\Field|Collection s_byword
     * @property Show\Field|Collection s_name
     * @property Show\Field|Collection s_contact
     * @property Show\Field|Collection s_phone
     * @property Show\Field|Collection supplier_id
     * @property Show\Field|Collection material_id
     *
     * @method Show\Field|Collection supplierinformation(string $label = null)
     * @method Show\Field|Collection setresource(string $label = null)
     * @method Show\Field|Collection getkey(string $label = null)
     * @method Show\Field|Collection imge(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection FlowNo(string $label = null)
     * @method Show\Field|Collection Title(string $label = null)
     * @method Show\Field|Collection BusType(string $label = null)
     * @method Show\Field|Collection AddUserNo(string $label = null)
     * @method Show\Field|Collection ApproStatus(string $label = null)
     * @method Show\Field|Collection AuditUserNo(string $label = null)
     * @method Show\Field|Collection AuditRemark(string $label = null)
     * @method Show\Field|Collection AuditTime(string $label = null)
     * @method Show\Field|Collection AuditStatus(string $label = null)
     * @method Show\Field|Collection material_information_id(string $label = null)
     * @method Show\Field|Collection inventory_exchanges_id(string $label = null)
     * @method Show\Field|Collection claim_orders(string $label = null)
     * @method Show\Field|Collection applicant(string $label = null)
     * @method Show\Field|Collection quantity(string $label = null)
     * @method Show\Field|Collection request_at(string $label = null)
     * @method Show\Field|Collection order_status(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection inventory_batches(string $label = null)
     * @method Show\Field|Collection inventory_id(string $label = null)
     * @method Show\Field|Collection inbound_order(string $label = null)
     * @method Show\Field|Collection quantity_received(string $label = null)
     * @method Show\Field|Collection acceptance_at(string $label = null)
     * @method Show\Field|Collection m_byword(string $label = null)
     * @method Show\Field|Collection m_categories(string $label = null)
     * @method Show\Field|Collection m_name(string $label = null)
     * @method Show\Field|Collection m_brand(string $label = null)
     * @method Show\Field|Collection m_type(string $label = null)
     * @method Show\Field|Collection m_unit(string $label = null)
     * @method Show\Field|Collection m_description(string $label = null)
     * @method Show\Field|Collection m_price(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection expires_at(string $label = null)
     * @method Show\Field|Collection resolvent(string $label = null)
     * @method Show\Field|Collection video(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection requisition_orders(string $label = null)
     * @method Show\Field|Collection request_time(string $label = null)
     * @method Show\Field|Collection s_byword(string $label = null)
     * @method Show\Field|Collection s_name(string $label = null)
     * @method Show\Field|Collection s_contact(string $label = null)
     * @method Show\Field|Collection s_phone(string $label = null)
     * @method Show\Field|Collection supplier_id(string $label = null)
     * @method Show\Field|Collection material_id(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     * @method $this video(...$params)
     * @method $this audio(...$params)
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     * @method $this video(...$params)
     * @method $this audio(...$params)
     */
    class Field {}
}
