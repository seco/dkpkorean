DELETE FROM eqdkp_styles where style_id=26;
DELETE FROM eqdkp_style_config where style_id=26;
INSERT INTO eqdkp_styles (style_id, style_name, template_path, body_background, body_link, body_link_style, body_hlink, body_hlink_style, header_link, header_link_style, header_hlink, header_hlink_style, tr_color1, tr_color2, th_color1, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, fontcolor_neg, fontcolor_pos, table_border_width, table_border_color, table_border_style, input_color, input_border_width, input_border_color, input_border_style) VALUES (26, 'dkpUA_Vert', 'defaultV', '253546', 'C6C6C6', 'underline', '576695', 'underline', 'C6C6C6', 'none', 'C6C6C6', 'underline', '39495A', '283846', '1F2F3D', 'Verdana', 'Verdana', 'Verdana', 10, 11, 12, 'C6C6C6', 'C6C6C6', '000000', 'FF0000', '00C000', 1, '60707E', 'solid', 'FFFFFF', 1, '60707E', 'solid');
INSERT INTO eqdkp_style_config (style_id, attendees_columns, logo_path) VALUES (26, '8', 'bc_header3.gif');
