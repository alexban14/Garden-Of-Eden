import { Route } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { AboutUsComponent } from './about/about-us/about-us.component';
import { ContactPageComponent } from './contact/contact-page/contact-page.component';
import { BlogPostsComponent } from './forum/blog-posts/blog-posts.component';
import { PostsListComponent } from './forum/blog-posts/posts-list/posts-list/posts-list.component';
import { PostNewComponent } from './forum/blog-posts/post-new/post-new/post-new.component';
import { PostShowComponent } from './forum/blog-posts/post-show/post-show/post-show.component';
import { PostEditComponent } from './forum/blog-posts/post-edit/post-edit/post-edit.component';
import { PrizesPageComponent } from './prizes/prizes-page/prizes-page.component';
import { PrizesListComponent } from './prizes/prizes-page/prizes-list/prizes-list.component';
import { PrizeCreateComponent } from './prizes/prizes-page/prize-create/prize-create.component';
import { PrizeShowComponent } from './prizes/prizes-page/prize-show/prize-show.component';
import { PrizeEditComponent } from './prizes/prizes-page/prize-edit/prize-edit.component';
import { LoginComponent } from './auth/login/login.component';
import { RegisterComponent } from './auth/register/register.component';
import { NotFoundComponent } from './not_found/not-found/not-found.component';
import { AuthComponent } from './auth/auth.component';

export const appRoutes: Route[] = [
	{
		path: '',
		component: HomeComponent
	},
	{
		path: 'about',
		component: AboutUsComponent
	},
	{
		path: 'contact-us',
		component: ContactPageComponent
	},
	{
		path: 'blog',
		component: BlogPostsComponent,
		children: [
			{
				path: 'posts',
				component: PostsListComponent
			},
			{
				path: 'new-post',
				component: PostNewComponent
			},
			{
				path: 'post/:id',
				component: PostShowComponent
			},
			{
				path: 'post/:id/edit',
				component: PostEditComponent
			}
		]
	},
	{
		path: 'prizes',
		component: PrizesPageComponent,
		children: [
			{
				path: 'all',
				component: PrizesListComponent
			},
			{
				path: 'new-prize',
				component: PrizeCreateComponent
			},
			{
				path: 'prize/:id',
				component: PrizeShowComponent
			},
			{
				path: 'prize/:id/edit',
				component: PrizeEditComponent
			}
		]
	},
	{
		path: 'auth',
		component: AuthComponent,
		children: [
			{
				path: 'login',
				component: LoginComponent
			},
			{
				path: 'register',
				component: RegisterComponent
			},
			{
				path: 'logout',
				redirectTo: ''
			}
		]
	},
	{
		path: '**',
		component: NotFoundComponent
	}
];
