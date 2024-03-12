--
-- PostgreSQL database dump
--

-- Dumped from database version 16.0
-- Dumped by pg_dump version 16.2 (Ubuntu 16.2-1.pgdg23.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

ALTER TABLE IF EXISTS ONLY public.products DROP CONSTRAINT IF EXISTS products_category_id_foreign;
ALTER TABLE IF EXISTS ONLY public.category_post DROP CONSTRAINT IF EXISTS category_post_post_id_foreign;
ALTER TABLE IF EXISTS ONLY public.category_post DROP CONSTRAINT IF EXISTS category_post_category_id_foreign;
DROP INDEX IF EXISTS public.products_category_id_index;
DROP INDEX IF EXISTS public.personal_access_tokens_tokenable_type_tokenable_id_index;
ALTER TABLE IF EXISTS ONLY public.users DROP CONSTRAINT IF EXISTS users_pkey;
ALTER TABLE IF EXISTS ONLY public.users DROP CONSTRAINT IF EXISTS users_email_unique;
ALTER TABLE IF EXISTS ONLY public.sliders DROP CONSTRAINT IF EXISTS sliders_pkey;
ALTER TABLE IF EXISTS ONLY public.products DROP CONSTRAINT IF EXISTS products_pkey;
ALTER TABLE IF EXISTS ONLY public.product_categories DROP CONSTRAINT IF EXISTS product_categories_pkey;
ALTER TABLE IF EXISTS ONLY public.posts DROP CONSTRAINT IF EXISTS posts_pkey;
ALTER TABLE IF EXISTS ONLY public.personal_access_tokens DROP CONSTRAINT IF EXISTS personal_access_tokens_token_unique;
ALTER TABLE IF EXISTS ONLY public.personal_access_tokens DROP CONSTRAINT IF EXISTS personal_access_tokens_pkey;
ALTER TABLE IF EXISTS ONLY public.password_reset_tokens DROP CONSTRAINT IF EXISTS password_reset_tokens_pkey;
ALTER TABLE IF EXISTS ONLY public.pages DROP CONSTRAINT IF EXISTS pages_pkey;
ALTER TABLE IF EXISTS ONLY public.migrations DROP CONSTRAINT IF EXISTS migrations_pkey;
ALTER TABLE IF EXISTS ONLY public.failed_jobs DROP CONSTRAINT IF EXISTS failed_jobs_uuid_unique;
ALTER TABLE IF EXISTS ONLY public.failed_jobs DROP CONSTRAINT IF EXISTS failed_jobs_pkey;
ALTER TABLE IF EXISTS ONLY public.category_post DROP CONSTRAINT IF EXISTS category_post_pkey;
ALTER TABLE IF EXISTS ONLY public.categories DROP CONSTRAINT IF EXISTS categories_pkey;
ALTER TABLE IF EXISTS public.users ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.sliders ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.products ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.product_categories ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.posts ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.pages ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.migrations ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.failed_jobs ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.category_post ALTER COLUMN id DROP DEFAULT;
ALTER TABLE IF EXISTS public.categories ALTER COLUMN id DROP DEFAULT;
DROP SEQUENCE IF EXISTS public.users_id_seq;
DROP TABLE IF EXISTS public.users;
DROP SEQUENCE IF EXISTS public.sliders_id_seq;
DROP TABLE IF EXISTS public.sliders;
DROP SEQUENCE IF EXISTS public.products_id_seq;
DROP TABLE IF EXISTS public.products;
DROP SEQUENCE IF EXISTS public.product_categories_id_seq;
DROP TABLE IF EXISTS public.product_categories;
DROP SEQUENCE IF EXISTS public.posts_id_seq;
DROP TABLE IF EXISTS public.posts;
DROP SEQUENCE IF EXISTS public.personal_access_tokens_id_seq;
DROP TABLE IF EXISTS public.personal_access_tokens;
DROP TABLE IF EXISTS public.password_reset_tokens;
DROP SEQUENCE IF EXISTS public.pages_id_seq;
DROP TABLE IF EXISTS public.pages;
DROP SEQUENCE IF EXISTS public.migrations_id_seq;
DROP TABLE IF EXISTS public.migrations;
DROP SEQUENCE IF EXISTS public.failed_jobs_id_seq;
DROP TABLE IF EXISTS public.failed_jobs;
DROP SEQUENCE IF EXISTS public.category_post_id_seq;
DROP TABLE IF EXISTS public.category_post;
DROP SEQUENCE IF EXISTS public.categories_id_seq;
DROP TABLE IF EXISTS public.categories;
SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: categories; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.categories (
    id bigint NOT NULL,
    title character varying(2048) NOT NULL,
    slug character varying(2048) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.categories OWNER TO oim_m;

--
-- Name: categories_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.categories_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.categories_id_seq OWNER TO oim_m;

--
-- Name: categories_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.categories_id_seq OWNED BY public.categories.id;


--
-- Name: category_post; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.category_post (
    id bigint NOT NULL,
    category_id bigint NOT NULL,
    post_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.category_post OWNER TO oim_m;

--
-- Name: category_post_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.category_post_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.category_post_id_seq OWNER TO oim_m;

--
-- Name: category_post_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.category_post_id_seq OWNED BY public.category_post.id;


--
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO oim_m;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.failed_jobs_id_seq OWNER TO oim_m;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO oim_m;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.migrations_id_seq OWNER TO oim_m;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: pages; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.pages (
    id bigint NOT NULL,
    title character varying(2048) NOT NULL,
    slug character varying(2048) NOT NULL,
    thumbnail character varying(2048),
    body text NOT NULL,
    keywords text NOT NULL,
    description text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.pages OWNER TO oim_m;

--
-- Name: pages_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.pages_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.pages_id_seq OWNER TO oim_m;

--
-- Name: pages_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.pages_id_seq OWNED BY public.pages.id;


--
-- Name: password_reset_tokens; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_reset_tokens OWNER TO oim_m;

--
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO oim_m;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.personal_access_tokens_id_seq OWNER TO oim_m;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- Name: posts; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.posts (
    id bigint NOT NULL,
    title character varying(2048) NOT NULL,
    slug character varying(2048) NOT NULL,
    thumbnail character varying(2048),
    body text NOT NULL,
    active boolean NOT NULL,
    user_id bigint NOT NULL,
    published_at timestamp(0) without time zone NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.posts OWNER TO oim_m;

--
-- Name: posts_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.posts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.posts_id_seq OWNER TO oim_m;

--
-- Name: posts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.posts_id_seq OWNED BY public.posts.id;


--
-- Name: product_categories; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.product_categories (
    id bigint NOT NULL,
    title character varying(2048) NOT NULL,
    slug character varying(2048) NOT NULL,
    image character varying(2048) NOT NULL,
    keywords text NOT NULL,
    description text NOT NULL,
    order_by integer DEFAULT 0 NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.product_categories OWNER TO oim_m;

--
-- Name: product_categories_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.product_categories_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.product_categories_id_seq OWNER TO oim_m;

--
-- Name: product_categories_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.product_categories_id_seq OWNED BY public.product_categories.id;


--
-- Name: products; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.products (
    id bigint NOT NULL,
    title character varying(1024) NOT NULL,
    slug character varying(1024) NOT NULL,
    images json NOT NULL,
    body character varying(4048) NOT NULL,
    active boolean DEFAULT false NOT NULL,
    is_new boolean DEFAULT false NOT NULL,
    sale boolean DEFAULT false NOT NULL,
    category_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.products OWNER TO oim_m;

--
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.products_id_seq OWNER TO oim_m;

--
-- Name: products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;


--
-- Name: sliders; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.sliders (
    id bigint NOT NULL,
    title character varying(1024) NOT NULL,
    image character varying(2048) NOT NULL,
    body character varying(2048) NOT NULL,
    link_title character varying(1024) NOT NULL,
    link_url character varying(1024) NOT NULL,
    "order" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.sliders OWNER TO oim_m;

--
-- Name: sliders_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.sliders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.sliders_id_seq OWNER TO oim_m;

--
-- Name: sliders_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.sliders_id_seq OWNED BY public.sliders.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: oim_m
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO oim_m;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: oim_m
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.users_id_seq OWNER TO oim_m;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: oim_m
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: categories id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.categories ALTER COLUMN id SET DEFAULT nextval('public.categories_id_seq'::regclass);


--
-- Name: category_post id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.category_post ALTER COLUMN id SET DEFAULT nextval('public.category_post_id_seq'::regclass);


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: pages id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.pages ALTER COLUMN id SET DEFAULT nextval('public.pages_id_seq'::regclass);


--
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- Name: posts id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.posts ALTER COLUMN id SET DEFAULT nextval('public.posts_id_seq'::regclass);


--
-- Name: product_categories id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.product_categories ALTER COLUMN id SET DEFAULT nextval('public.product_categories_id_seq'::regclass);


--
-- Name: products id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);


--
-- Name: sliders id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.sliders ALTER COLUMN id SET DEFAULT nextval('public.sliders_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: categories; Type: TABLE DATA; Schema: public; Owner: oim_m
--

INSERT INTO public.categories VALUES (1, 'Новости компании', 'novosti-kompanii', '2024-03-10 10:45:06', '2024-03-10 10:45:06');
INSERT INTO public.categories VALUES (2, 'Новости пртнёров', 'novosti-prtnerov', '2024-03-10 10:45:22', '2024-03-10 10:45:22');
INSERT INTO public.categories VALUES (3, 'Полезная информация', 'poleznaia-informaciia', '2024-03-10 10:45:47', '2024-03-10 10:46:29');


--
-- Data for Name: category_post; Type: TABLE DATA; Schema: public; Owner: oim_m
--

INSERT INTO public.category_post VALUES (1, 3, 1, NULL, NULL);
INSERT INTO public.category_post VALUES (2, 3, 3, NULL, NULL);
INSERT INTO public.category_post VALUES (3, 3, 4, NULL, NULL);


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: oim_m
--



--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: oim_m
--

INSERT INTO public.migrations VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO public.migrations VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO public.migrations VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO public.migrations VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO public.migrations VALUES (5, '2023_10_28_054139_create_categories_table', 1);
INSERT INTO public.migrations VALUES (6, '2023_10_28_054235_create_posts_table', 1);
INSERT INTO public.migrations VALUES (7, '2023_10_28_054451_create_category_posts_table', 1);
INSERT INTO public.migrations VALUES (8, '2024_02_07_054139_create_product_categories_table', 1);
INSERT INTO public.migrations VALUES (9, '2024_02_09_043022_create_sliders_table', 1);
INSERT INTO public.migrations VALUES (10, '2024_02_16_043022_create_products_table', 1);
INSERT INTO public.migrations VALUES (11, '2024_02_22_033708_create_pages_table', 1);


--
-- Data for Name: pages; Type: TABLE DATA; Schema: public; Owner: oim_m
--

INSERT INTO public.pages VALUES (1, 'О компании', 'about', '', '', '', '', '2024-03-07 03:31:52', '2024-03-07 03:31:52');


--
-- Data for Name: password_reset_tokens; Type: TABLE DATA; Schema: public; Owner: oim_m
--



--
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: oim_m
--



--
-- Data for Name: posts; Type: TABLE DATA; Schema: public; Owner: oim_m
--

INSERT INTO public.posts VALUES (1, 'Натуральные масла холодного отжима для красоты и здоровья', 'naturalnye-masla-xolodnogo-otzima-dlia-krasoty-i-zdorovia', 'posts/post-1280px-Many_types_of_Oils.jpg', '<p>Альтернативой, наполненным химикатами продуктам питания и косметики, являются натуральные масла, холодного отжима, которые имеют множество свойств. Растительные масла положительно влияют на состояние организма, ногтей, кожи и волос.<br>Что такое нерафинированное масло?<br>Масло нерафинированное - это естественное масло, называемое также неочищенным или холоднотянутым. Иначе говоря, оно возникает в процессе холодного отжима, без дополнительных этапов очистки.<br>Масла холодного отжима гораздо полезнее рафинированных. Стоит заметить, если речь идет о диете, то не забываем и про уход за кожей, и волосами. Масла - это сокровищница веществ, таких как незаменимые жирные кислоты, витамины, микроэлементы, липиды или фитостерины, необходимые для здоровья, красоты, молодости и нормального функционирования организма. Благодаря маслам организм пополняется питательными веществами, они интенсивно увлажняют и восстанавливают волосы, кожу и ногти, а также отлично зарекомендовали себя и в народной медицине.<br>Применение масел холодного отжима<br>В настоящее время наблюдается большой интерес к натуральным препаратам. Люди с удовольствием возвращаются к использованию натуральных масел, которые находят применение не только в кулинарии, но также в лечении и косметике. Их можно использовать:<br>в качестве добавки для различных блюд,<br>при терапевтическом лечении,<br>как косметическое средство: наносить на кожу, волосы или ногти с целью улучшения их состояния, тонуса и работоспособности, а также укрепления и увлажнения кожи.<br>Льняное масло<br>Преимущества употребления:<br>Льняное масло следует хранить в холодильнике и употреблять в пищу исключительно холодным, в качестве дополнения к овощам, соусам и салатам. Это продукт кратковременный, делают его небольшими партиями. Является ценным источником жирных кислот омега-3, омега-6 и витамина Е.<br>А также:<br>регулирует уровень гормонов,<br>укрепляет иммунитет,<br>регулирует пищеварение,<br>поддерживает нервную систему,<br>может быть использован в рационе для предотвращения рака,<br>снижает уровень холестерина,<br>снижает риск возникновения заболеваний сердечно-сосудистой системы.<br>Как косметическое средство:<br>Льняное масло положительно влияет на состояние кожи и волос.<br>Укрепляет волосы и устраняет их выпадение.<br>Насыщает их необходимыми, для отличной работоспособности, веществами.<br>Стимулирует кожу к обновлению и ускоряет ее регенерацию.<br>Рапсовое масло<br>Преимущества употребления:<br>Рапсовое масло содержит благоприятно влияющие на организм жирные кислоты, антиоксиданты, витамины A, E, K.<br>Благотворно влияет на состояние кожи, работу почек, сердца и кровеносную систему.<br>Считается одним из самых полезных масел в мире, останавливает процессы старения в организме.<br>Снижает уровень плохого холестерина.<br>Добавляет энергии.<br>Снижает сахар в крови.<br>Нейтрализует действие свободных радикалов и повышает кпд интеллектуальной собственности.<br>Регулирует обмен веществ.<br>Облегчает симптомы псориаза.<br>Как косметическое средство:<br>Рапсовое масло, особенно холодного отжима, является отличным косметическим средством для смазки волос и ухода за зрелой, сухой, проблемной или чувствительной кожей.<br>Предотвращает появление морщин, снимает акне и успокаивает раздражения.<br>Увлажняет и омолаживает кожу, а также насыщает ее необходимыми для красоты, здоровья и молодости питательными веществами.<br>Устраняет сухость, шелушение и зуд.<br>Отлично подходит в качестве интенсивной ремонтно - увлажняющей маски для сухих волос. Оно легкое, благодаря чему быстро, проникает в пряди и снимает раздражение кожи головы.<br>Укрепляет волосы, делает их здоровыми и полными блеска.<br>Кокосовое масло<br>Преимущества употребления:<br>Холодное кокосовое масло является ценным источником питательных веществ: витаминов, незаменимых жирных кислот, магния, цинка, фосфора, кальция, фолиевой кислоты.<br>Повышает уровень хорошего холестерина,<br>укрепляет иммунитет,<br>питает организм и мозг, а также добавляет энергии и предотвращает потерю памяти,<br>обладает одним из насыщенных жиров, нужных для организма - триглицеридом средней цепи, который дает организму энергию без повышения уровня сахара в крови. В результате, если использовать кокосовое масло для приготовления некоторых блюд, можно избежать отложения жировой ткани.<br>Как косметическое средство:<br>Находит применение в косметологии из-за успокаивающего, противовоспалительного и увлажняющего действия. Может использоваться для ухода за кожей лица, тела или приобретших популярность, смазок для волос. Это натуральное косметическое средство улучшает состояние кожи, также подходит и для проблемной. Можно использовать его для приготовления домашнего пилинга. Достаточно четырех столовых ложек кокосового масла, добавить в них две столовые ложки сахара и все перемешать, а затем сделать пилинг всего тела. Таким образом, удаляются мертвые клетки эпидермиса, разглаживается и смягчается кожа.<br>Подсолнечное масло<br>Преимущества употребления:<br>Отлично подходит для жарки, выпечки и холодных блюд. Подсолнечное масло является ценным источником жирных кислот омега-3 и омега-6, бета-каротина, витамина Е и антиоксидантов. Стоит включить его в рацион, так как оно:<br>повышает иммунитет организма,<br>замедляет развитие инфекции,<br>высокое содержание антиоксидантов защищает от воздействия свободных радикалов,<br>обладает противораковыми свойствами.<br>Как косметическое средство:<br>Рекомендуется как натуральное косметическое средство для ухода за кожей любого типа, особенно сухой, раздраженной, чувствительной.<br>Не вызывает аллергии<br>укрепляет структуру кожи,<br>уменьшает риск раздражения и инфекций,<br>регенерирует кожу,<br>ускоряет заживление ран,<br>уменьшает видимость растяжек.<br>Соевое масло<br>Преимущества употребления:<br>Одним из менее известных, но постоянно недооцененных, является соевое масло холодного отжима. Его преимущества оценят вегетарианцы. Это легкое масло с нейтральным запахом, которое можно использовать по-разному.<br>Снижает заболевание болезней сердца.<br>из-за содержания витамина K, защищает от болезни Альцгеймера,<br>защищает нервные клетки от повреждений,<br>предотвращает возникновение остеопороза,<br>содержит витамин E, B4, лецитин, флавоноиды, а также ненасыщенные и полинасыщенные жирные кислоты.<br>Как косметическое средство:<br>Холодное соевое масло отлично улучшает состояние кожи:<br>ускоряет заживление ран и уменьшает видимость шрамов,<br>проявляет противовоспалительные свойства,<br>защищает от воздействия солнечной радиации,<br>укрепляет и восстанавливает естественный защитный барьер кожи,<br>разглаживает, увлажняет, снимает воспаление и уменьшает расширенные поры.<br>Соевое масло холодного отжима может стать отличным полуфабрикатным изделием для создания домашних косметических средств.<br>Сафлоровое масло<br>Преимущества употребления:<br>Масло сафлоровое, называемое также маслом шафрана известно с древних времен. Оно является драгоценной сокровищницей питательных веществ.<br>Среди них:<br>линолевая кислота,<br>олеиновая кислота,<br>стеариновая кислота,<br>пальмитиновая кислота,<br>витамин Е,<br>микроэлементы, такие как кальций, фосфор и магний.<br>Сафлоровое масло нашло применение в натуральной медицине и косметологии. Почему стоит ввести его в свой рацион? Потомучто оно:<br>укрепляет иммунную систему,<br>регулирует обмен веществ,<br>улучшает работу мозга,<br>нейтрализует действие свободных радикалов,<br>благотворно влияет на мышцы и сахарный диабет,<br>проявляет антиатеросклеротические свойства,<br>оказывает мочегонное действие.<br>Как косметическое средство:<br>Укрепляет волосы, кожу и ногти.<br>Содержание мощных антиоксидантов в масле сафлора выводит свободные радикалы из организма, тем самым, защищая кожу от старения и омолаживая.<br>Насыщает кожу и волосы витаминами, липидами, минералами и жирными кислотами, необходимыми для поддержания их отличном состоянии.<br>Успокаивает раздражение, уменьшает воспаления и минимизирует видимость морщин.<br><br>Экспресс - темп жизни, недосыпание и употребление фастфуда, приводят к ухудшению состояния волос, кожи и ногтей, а также к ухудшению общего состояние организма. Поэтому стоит обратиться к природе и выбирать масла холодного отжима, которые отличо подходят как в кулинарии, так и в косметологии.</p>', true, 1, '2024-03-04 17:49:42', '2024-03-10 10:49:51', '2024-03-10 10:49:51');
INSERT INTO public.posts VALUES (3, 'Рапсовое и оливковое масло: какое лучше?', 'rapsovoe-i-olivkovoe-maslo-kakoe-lucse', 'posts/post-Canola_field.jpg', '<p>Многие сознательные люди часто путают эффекты масел, когда речь заходит о выборе между маслом оливковым и, например, рапсовым. Некоторые твердо убеждены в том, что масло рапса чрезвычайно полезно для здоровья, другие придерживаются мнения, что оливковое масло намного лучше. Это может показаться странным, но факт в том, что оба эти масла имеют какое-то поразительное сходство из-за их пользы для здоровья и красоты тела.<br><br>Рапсовое масло<br><br>Существует много споров о рапсовом масле и его преимуществах. Хотя некоторые эксперты считают, что масло не полезно для людей, другие, напротив, рекомендует его, как питательное и чудодейственное средство. Ранее, в 1970 годах, рапсовое масло было впервые извлечено из рапсового растения. Это экстрагированное масло обладало большим количеством эруковой кислоты, имеющей высокий уровень токсинов. Потребление этой кислоты приводит к возникновению и развитию болезни Кешана, именно она может быть связана с фиброзными поражениями сердца.<br><br>После 1970 годов культивирование растения полностью изменилось. Масло больше не извлекается непосредственно из рапсового растения, его получают из семян. Согласно исследованиям, рапсовое масло сегодня не содержит чрезмерное количество данной кислоты, которая вредна для человека. Это масло с пониженным содержанием насыщенных жиров и содержит мононенасыщенные жиры, которые менее вредны. Потребление масла эффективно, достаточно хорошо понижает уровень холестеринаф. Масло, на самом деле, богато омега-3 жирной кислотой, которое считается полезным для сердца.<br><br>Оливковое масло<br><br>Это масло, по сравнению с маслом рапсовым, более популярно. Причём практически во всех уголках мира. Его получают из оливковых плодов, обнаруженных в изобилии в средиземноморских регионах. Золотистое масло нравится многим из-за приемлемого уровня холестерина и иных преимуществ для здоровья. Следовательно, это средство приобрело высокую популярность у потребителей, которые ищут полезные натуральные продукты. Потребление оливкового масла помогает уменьшить плохой холестерин или ЛПНП в крови и увеличивает количество хорошего холестерина или ЛПВП. Количество жира в оливковом масле сравнительно велико (если сравнивать с рапсовым, которое содержит только 6% насыщенного жира).<br><br>Масло рапсовое против оливкового масла<br><br>Когда дело доходит до сравнения преимуществ масла рапсового и оливкового, необходимо рассмотреть некоторые аспекты. Отметим, что они оба достаточно полезны. Оба они могут стать здоровой альтернативой для замены других масел, таких как кокосовое масло или горчичное. Их можно потреблять на регулярной основе. Они безопасны и почти не имеют побочных эффектов.<br><br>Но какое из них все же лучше для косметических процедур? Нужно рассмотреть факты, состав каждого масла, прежде чем сделать окончательный выбор. Некоторые производители рапсового масла утверждают, что оно отличается большим количеством мононенасыщенных жиров (по сравнению с оливковым маслом). Лабораторные исследования могут представить совершенно другой результат. Так, оливковое в этом плане все еще обходит масло рапса. Говоря об исследованиях, также было установлено, что оливковое масло имеет много полезных жиров (приблизительно в три раза больше). Уровень полиненасыщенных жиров также низкий именно в оливковом масле, что можно считать дополнительным бонусом. Тем не менее масло рапса может посоревноваться с оливковым, когда речь заходит о компонентах, полезных для интенсивного увлажнения кожи. Сравнивая эти два средства, сложно сказать наверняка какое лучше. Выбор стоит делать, учитывая собственные предпочтения и ожидания от эффекта воздействия масла. Мы всегда поможем Вам в получении масла холодного отжима и подберем подходящий шнековый <a href="https://maslopress-altai.ru/catalog/%D0%BC%D0%B0%D1%81%D0%BB%D0%BE%D0%BF%D1%80%D0%B5%D1%81%D1%81%D1%8B">маслопресс с доставкой по России</a></p>', true, 1, '2024-12-02 12:22:22', '2024-03-10 11:13:57', '2024-03-10 11:13:57');
INSERT INTO public.posts VALUES (4, 'Полезные свойства арахисового масла', 'poleznye-svoistva-araxisovogo-masla', 'posts/post-arakhsovoe-maslo.jpg', '<p>Арахис потребляется сырым, жареным и с добавленной солью (не очень здоровой из-за сочетания гидрогенизированных жиров и натрия). Арахисовое масло производится либо холодным прессованием (самое здоровое, потому что оно не меняет комбинацию жиров), либо центрифугируется теплом.<br><br>Арахисовое масло или арахис<br>Арахисовое масло очень распространено на западных рынках и является частью некоторых из наиболее известных азиатских рецептов. Оно имеет очень светлый цвет, немного тянущуюся консистенцию и очень мягкий аромат. На кухне оно подходит для приготовления майонеза, соусов и жарки. Также, отлично подходит для приготовления сладостей, пирожных или пирогов.<br><br>Будучи очень мягким и богатым витамином Е, его также можно использовать местно, так как он может служить базовым маслом для массажных мазей, смешанных с вашими любимыми основными формулами. Успокаивает кожу и служит для лечения всех видов экземы.<br><br>Свойства<br>Некоторые из самых выдающихся свойств арахисового масла:<br><br>Как и все жиры, он имеет около 900 калорий на 100 граммов.<br>Одним из важнейших свойств арахисового масла является то, что оно не имеет холестерина.<br><br>Хотя это оно имеет такой же полезности, как оливковое масло (лучший вариант в соответствии со всеми исследованиями), арахисовое масло имеет малонасыщенных жирных кислот (18,3 грамма).<br><br>Имеет хорошее соотношение мононенасыщенных (49 грамм) и полиненасыщенных (27,8 грамма).<br><br>Арахисовое масло богато витамином Е, поскольку в соответствии с его формулой экстракции (путем холодного прессования или центрифугирования) оно содержит до 30 мг этого микроэлемента и никогда не опускается ниже 15 мг. В любом случае, в нем будет примерно в три раза больше этого витамина чем в оливковом масле, (почти) золотом стандарте, на котором измеряются все жиры.<br><br>С арахисом, как и со всеми пищевыми продуктами, проводятся всевозможные испытания, направленные на излечение и улучшение различных заболеваний. Хотя это здоровый продукт, хотя и не такой, как оливковое масло, это далеко не то чудо творящее средство, которое ищет сегодняшнее общество.<br><br>Было показано, что он эффективен при лечении доброкачественной гиперплазии предстательной железы, а не рака. Это благодаря микроэлементу, называемому бета-ситостеролом, кажется, что он улучшает симптомы, связанные с этой патологией, которая вызывает дискомфорт, но ни в коем случае не является серьезной. Другое дело - рак.<br><br>А вы знали?<br>Упакованных арахис, продаваемые как закуска, не рекомендуются для здоровья. Они жареные с чрезвычайно вредными гидрированными жирами и, кроме того, они имеют много соли.<br><br>Вы можете сделать дешевую массажную мазь для дома из холодного прессованного арахисового масла.</p>', true, 1, '2022-12-12 00:12:12', '2024-03-10 11:19:23', '2024-03-10 11:19:23');


--
-- Data for Name: product_categories; Type: TABLE DATA; Schema: public; Owner: oim_m
--

INSERT INTO public.product_categories VALUES (2, 'Маслопрессы', 'catalog/oil-presses', 'product_category/category-oil-press.png', '', '', 0, '2024-03-07 03:53:27', '2024-03-07 03:53:27');
INSERT INTO public.product_categories VALUES (3, 'Маслофильтры', 'catalog/oil-filters', 'product_category/oil_filter.jpg', '', '', 0, '2024-03-07 03:53:27', '2024-03-07 03:53:27');
INSERT INTO public.product_categories VALUES (4, 'Жаровня паровая', 'catalog/zharovniy-parovaya', 'product_category/thumbs_zarovniy.png', '', '', 0, '2024-03-07 03:53:27', '2024-03-07 03:53:27');
INSERT INTO public.product_categories VALUES (6, 'Экструдеры', 'catalog/exstrudery', 'product_category/thumbs.IMG_20230315_180410.jpg', '', '', 0, '2024-03-07 03:53:27', '2024-03-07 03:53:27');
INSERT INTO public.product_categories VALUES (5, 'Запчасти', 'catalog/zapchasty', 'product_category/thumbs.zip.png', '', '', 0, '2024-03-07 03:53:27', '2024-03-07 03:53:27');


--
-- Data for Name: products; Type: TABLE DATA; Schema: public; Owner: oim_m
--



--
-- Data for Name: sliders; Type: TABLE DATA; Schema: public; Owner: oim_m
--



--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: oim_m
--

INSERT INTO public.users VALUES (1, 'admin', 'admin@admin.ru', NULL, '$2y$10$tN9Mv20JEAyhqHMb8vmA.epNW5whHbfM3V7kpwoVMauws1cyjJ8lC', 'SIASLQmLUtMhQksmJEUvkQTZAk4vxoP2gOe8okRL9Pop74K12fqImu0U2Lme', '2024-03-10 10:43:45', '2024-03-10 10:43:45');


--
-- Name: categories_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.categories_id_seq', 3, true);


--
-- Name: category_post_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.category_post_id_seq', 3, true);


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.migrations_id_seq', 11, true);


--
-- Name: pages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.pages_id_seq', 1, true);


--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- Name: posts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.posts_id_seq', 4, true);


--
-- Name: product_categories_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.product_categories_id_seq', 6, true);


--
-- Name: products_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.products_id_seq', 1, false);


--
-- Name: sliders_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.sliders_id_seq', 1, false);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: oim_m
--

SELECT pg_catalog.setval('public.users_id_seq', 1, true);


--
-- Name: categories categories_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_pkey PRIMARY KEY (id);


--
-- Name: category_post category_post_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.category_post
    ADD CONSTRAINT category_post_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: pages pages_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.pages
    ADD CONSTRAINT pages_pkey PRIMARY KEY (id);


--
-- Name: password_reset_tokens password_reset_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);


--
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- Name: posts posts_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.posts
    ADD CONSTRAINT posts_pkey PRIMARY KEY (id);


--
-- Name: product_categories product_categories_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.product_categories
    ADD CONSTRAINT product_categories_pkey PRIMARY KEY (id);


--
-- Name: products products_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);


--
-- Name: sliders sliders_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.sliders
    ADD CONSTRAINT sliders_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: oim_m
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- Name: products_category_id_index; Type: INDEX; Schema: public; Owner: oim_m
--

CREATE INDEX products_category_id_index ON public.products USING btree (category_id);


--
-- Name: category_post category_post_category_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.category_post
    ADD CONSTRAINT category_post_category_id_foreign FOREIGN KEY (category_id) REFERENCES public.categories(id) ON DELETE CASCADE;


--
-- Name: category_post category_post_post_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.category_post
    ADD CONSTRAINT category_post_post_id_foreign FOREIGN KEY (post_id) REFERENCES public.posts(id) ON DELETE CASCADE;


--
-- Name: products products_category_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: oim_m
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_category_id_foreign FOREIGN KEY (category_id) REFERENCES public.product_categories(id) ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

